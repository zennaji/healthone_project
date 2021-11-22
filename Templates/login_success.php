<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');

?>

<body>

    <div class="cont1 container-fluid">
        <?php
       
       //include_once('defaults/menu.php');
        //session_start();

        if(isset($_SESSION["email"])){
            include_once('defaults/menu.php');
            include_once('access.php');

            echo ' <div class="after_make_acc">';
            echo '<h4 style="color:#dc4e68;text-align:center;" >Login Success, Welcom -' .$_SESSION["email"].'</h4> <br>';
            echo '<p style="text-align:center;"><a style="color:white;" href="/uitloggen">Uitloggen </a></p>';
            echo ' </div>';
            //include_once('dashboard.php');
        }
        else{
            header('location: /inloggen');
        }

        include_once('defaults/footer.php');
        ?>
    </div>



</body>

</html>