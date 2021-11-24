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

<?php 
            // array makem om de error message hier op te slaan.
            $errors = [
                'nameError' => '',
                'emailError' => '',
                'passwordError' => '',
            ];


            if($_SERVER['REQUEST_METHOD'] == "POST"){  
                include "../Modules/Database.php";
                //gegevens opslaan in de database
                if (isset($_POST['submit'])) {
                    // $name=""; $email= ""; $password="";
                    
                    //name validation
                    if( isset($_POST['name']) ){
                    $name = strip_tags( $_POST['name']);
                    if(empty($name) || ctype_space($name)){   // spatie controleren
                        $errors['nameError'] = 'Voer je naam in!';    // error messages opslaan in de array
                    }
                    }
                    //email validation
                    if( isset($_POST['email']) ){
                    $email = strip_tags($_POST['email']);
                    if(empty($email)){
                        $errors['emailError'] = 'Voer je email adres in !';
                       
                    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){  // syntax van de email te controleren
                        $errors['emailError'] = 'Voer een geldige email adres in !';
                    }
                    }
                    //password validation
                    if( isset($_POST['password']) ){
                    $password = strip_tags($_POST['password']);
                    if(empty($password)){
                        $errors['passwordError'] = 'Voer een wachtwoord in !';
                    }
                    
                    }
                    // pass confirmation validation
                    if( isset($_POST['passConfirm']) ){
                        $passConfirm = strip_tags($_POST['passConfirm']);
                        if(empty($passConfirm)){
                            $errors['passwordError'] = 'U moet uw wachtwoord bevestigen !';
                        }
                        
                        }

                    // validation : of er geen errors zijn 
                    if(!array_filter($errors)){ 

                        $q = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
                        $stmt = $pdo->prepare($q);
                        $stmt->bindParam(':name', $name);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':password', $hashed_password);
                        
                        $name = $_POST['name'];
                        $email = $_POST['email']; 
                        $password = $_POST['password']; 
                        $passConfirm = $_POST['passConfirm']; 
                        if($password == $passConfirm){
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            $stmt->execute();
                            echo '
                                <div class="after_make_acc">
                                    <h5 style="color:#dc4e68;text-align:center;">uw account is succesvol aangemaakt! </h5>
                                    <p style="text-align:center;"><a style="color:white;" href="/inloggen">Inloggen</a></p>
                                </div>
                                ';
                        }else{
                            $errors['passwordError'] = 'De wachtwoord komt niet overeen !';

                        }

                        
                        
                    }
                }
            }
            
           ?>
            <!-- Register section -->
            <div class="login_container">
                <img src="/img/logo.png" alt="helthone">
                <p class="acc_text">Heb je nog geen account in Mijn Healthone ? 
                     Vul hieronder uw e-mailadres en kaartnummer
                      in zodat we u een e-mail kunnen sturen om een
                       nieuw wachtwoord aan te maken.
                </p>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="Post" class="login_inputs">
                    <input name="name" type="text" placeholder="Naam" >
                    <div class="form-text  text-muted error"> <?php echo $errors['nameError']  ?></div>
                    <input name="email" type="text" placeholder="Email">
                    <div class="form-text  text-muted error"> <?php echo $errors['emailError']  ?></div>
                    <input name="password" type="password" placeholder="Wachtwoord">
                    <input name="passConfirm" type="password" placeholder="Wachtwoord bevestigen">
                    <div class="form-text  text-muted error"> <?php echo $errors['passwordError']  ?></div>
                    <button name="submit" class="login_button" type="submit">Aanmaken</button>
                </form>
                <div class="login_choises">
                    <p><a href="/inloggen">Ik heb al een account</a>  <br>
                </p>
                    
                </div>

            </div>
            <!-- ================ -->
           
           <?php
            include_once('defaults/socialm.php');
            include_once('defaults/footer.php');
            ?>
    </div>

</body>

</html>