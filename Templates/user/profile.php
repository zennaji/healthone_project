<!DOCTYPE html>
<html>
<?php
include_once(TEMPLATE_ROOT . "/defaults/head.php");

 $errors = [
    'currentPassError' => '',
    'newPassError' => '',
    'verPassError' => '',
];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../Modules/Database.php";
    //gegevens opslaan in de database
    if (isset($_POST['changePassSubmit'])) {
        $activePass = $_SESSION["password"];
        $activeEmail =  $_SESSION["email"];

        //currentPass validation
        if (isset($_POST['currentPass'])) {
            $currentPass = strip_tags($_POST['currentPass']);
            if (empty($currentPass)) {
                $errors['currentPassError'] = 'Voer uw huidige wachtwoord in !';
            } elseif (!password_verify($currentPass, $activePass)) {
                $errors['currentPassError'] = 'Het ingevoerde wachtwoord komt niet overeen met uw huidige wachtwoord !';
            }
        }
        // newPass validation
        if (isset($_POST['newPass'])) {
            $newPass = strip_tags($_POST['newPass']);
            if (empty($newPass)) {
                $errors['newPassError'] = 'Voer een nieuwe wachtwoord in !';
            }
        }
        // verPass validation
        if (isset($_POST['verPass'])) {
            $verPass = strip_tags($_POST['verPass']);
            if (empty($verPass)) {
                $errors['verPassError'] = 'U moet uw wachtwoord bevestigen !';
            } elseif ($newPass !== $verPass) {
                $errors['verPassError'] = 'De wachtwoorden komen niet overeen !';
            } else {
                $new_hashed_password = password_hash($newPass, PASSWORD_DEFAULT);
            }
        }

         if (!array_filter($errors)) {

            // var_dump($new_hashed_password);
            // var_dump($activeEmail);
            $q = "UPDATE `users` SET `password` = '$new_hashed_password' WHERE `users`.`email` =" . "'$activeEmail'";
            $stmt = $pdo->prepare($q);
            $stmt->execute();
          
 

            
                echo "<h3 >Uw wachtwoord is succesvol gewijzigd !</h3>";
             
        }
    }
}


?>

<body>
    <div class=" container-fluid">

        <?php
        include_once(TEMPLATE_ROOT . "/defaults/menu.php");
        ?>
        <div class="container-fluid">
            <div class="setting_title">
                <h3>PROFILE</h3>
            </div>
            <div class="profile_details">
                <div class="profile_header">
                    <img src="https://picsum.photos/200/ " width="160px">
                     
                    <h3><?= $_SESSION["name"]; ?></h5>
                </div>
                <div class="profile_body">

                    <div class="profile_name">
                        <div class="name_info">
                            <label for="name">Naam:</label>
                            <p> <?= $_SESSION["name"]; ?></p>
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="name_input inpt invisible">
                            <input type="text" name="profileName"><br>
                            <button type="submit" name="nameSubmit">Bijwerken</button>
                        </div>
                    </div>
                    <div class="profile_email ">
                        <div class="email_info">
                            <label for="email">Email:</label>
                            <p> <?= $_SESSION["email"]; ?></p>
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="email_input inpt invisible">
                            <input type="text" name="profileEmail"><br>
                            <button type="submit" name="emailSubmit">Bijwerken</button>
                        </div>
                    </div>
                    <div class="profile_pass">
                        <div class="pass_info">
                            <label for="pass">Wachtwoord:</label>
                            <p>********</p>
                            <i class="far fa-edit"></i>
                        </div>
                        <div class="pass_input inpt  ">
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                                <input type="text" name="currentPass" placeholder="Huidige wachtwoord"><br>
                                <div class="form-text  text-muted error"> <?php echo $errors['currentPassError']  ?></div>
                                <input type="text" name="newPass" placeholder="Nieuwe wachtwoord"><br>
                                <div class="form-text  text-muted error"> <?php echo $errors['newPassError']  ?></div>
                                <input type="text" name="verPass" placeholder="Herhaal nieuwe wachtwoord"><br>
                                <div class="form-text  text-muted error"> <?php echo $errors['verPassError']  ?></div>
                                <button type="submit" name="changePassSubmit">Bijwerken</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>


















        <?php include_once(TEMPLATE_ROOT . "/defaults/footer.php");  ?>
    </div>
</body>
<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.js"></script>