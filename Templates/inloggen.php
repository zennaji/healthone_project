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


            <!-- Inloggen section -->
            <div class="login_container">
                <img src="/img/logo.png" alt="helthone">
                <div class="login_inputs">
                    <input type="text" value="Email">
                    <input type="password" placeholder="Wachtwoord">
                    <button class="login_button" placeholder="submit" name="login" value="Log in">LOG IN</button>
                </div>
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
    </div>

</body>

</html>