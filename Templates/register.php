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
                <div class="login_inputs">
                    <input type="text" placeholder="Email">
                    <input type="number" placeholder="Pasnummer">
                    <button class="login_button" type="submit" name="login" value="Log in">Aanmaken</button>
                </div>
                <div class="login_choises">
                    <p><a href="/inloggen">Ik heb al een account</a>  <br>
                </p>
                    
                </div>

            </div>



           <?php
            include_once('defaults/socialm.php');
            include_once('defaults/footer.php');
            ?>
        </div>
    </div>

</body>

</html>