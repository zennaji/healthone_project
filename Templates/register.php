<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <div class="cont1 container-fluid">
        <div class="row no-gutters">

            <?php
            include_once('defaults/header.php');
            include_once('defaults/menu.php');
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
                    <input name="name" type="text" placeholder="naam" >
                    <input name="email" type="text" placeholder="Email">
                    <input name="password" type="password" placeholder="wachtwoord">
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
    </div>

</body>

</html>