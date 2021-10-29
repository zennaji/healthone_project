<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <div class="cont1 container-fluid">

            <?php
            include_once('defaults/menu.php');
            ?>
            <!--  -->
            <?php 
            // array makem om de error message hier op te slaan.
            session_start();
            $errorsLogin = [
                'emailError' => '',
                'passwordError' => '',
            ];


            if($_SERVER['REQUEST_METHOD'] == "POST"){  
                include "../Modules/Database.php";
                //gegevens opslaan in de database
                if (isset($_POST['login'])) {
                    // $name=""; $email= ""; $password="";
                    
                    //email validation
                    if( isset($_POST['email']) ){
                    $email = strip_tags($_POST['email']);
                    if(empty($email)){
                        $errorsLogin['emailError'] = 'Voer je email adres in !';
                       
                    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // syntax van de email te controleren
                        $errorsLogin['emailError'] = 'Voer een geldige email adres in !';
                    }
                    }
                    //password validation
                    if( isset($_POST['password']) ){
                    $password = strip_tags($_POST['password']);
                    if(empty($password)){
                        $errorsLogin['passwordError'] = 'Voer je wachtwoord in !';
                    }
                    }
                    // validation : of er geen errors zijn 
                    if(!array_filter($errorsLogin)){ 

                        $q = "SELECT * FROM users WHERE email = :email AND password = :password";
                        $stmt = $pdo->prepare($q);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':password', $password);
                        
                        $email = $_POST['email']; 
                        $password = $_POST['password']; 

                        $stmt->execute();

                        // 
                        $count = $stmt->rowCount();
                        if($count > 0){
                            $_SESSION["email"] = $_POST["email"];
                            header("location:/login_success");
                        //     echo '
                        // <div class="after_make_acc">
                        //     <h5 style="color:#dc4e68;text-align:center;">Welcome.. U bent ingellogd ! </h5>
                        //     <p style="text-align:center;"><a style="color:white;" href="/inloggen">Uitloggen</a></p>
                        // </div>
                        // ';
                        
                        }
                        else{
                            echo '
                        <div class="after_make_acc">
                            <h5 style="color:#dc4e68;text-align:center;">U bent niet ingellogd ! </h5>
                            <p style="text-align:center; color:white;">Faild ! try again .</p>
                        </div>
                        ';

                        }
                        




                        
                    }
                }
            }
            
           ?>






            <!-- Inloggen section -->
            <div class="login_container">
                <img src="/img/logo.png" alt="helthone">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="Post" class="login_inputs">
                    <input name="email" type="text"  placeholder="Email" >
                    <div class="form-text  text-muted error"> <?php echo $errorsLogin['emailError']  ?></div>
                    <input name="password" type="password" placeholder="Wachtwoord">
                    <div class="form-text  text-muted error"> <?php echo $errorsLogin['passwordError']  ?></div>
                    <button name="login" class="login_button" placeholder="submit"  value="Log in">LOG IN</button>
                </form>
                <div class="login_choises">
                    <p><a href="/register">Ik heb nog geen account </a>  <br>
                   <a href="#ww_vergeten">Wachtwoord vergeten?</a> 
                </p>   
                </div>
            </div>
           



           <?php
            include_once('defaults/socialm.php');
            include_once('defaults/footer.php');
            ?>
    </div>

</body>

</html>