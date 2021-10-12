<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');

?>

<body>

    <div class="cont1 container-fluid">
        <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');


        ?>
                <?php
                $db = include('../Modules/Database.php');

                // $query = $db->prepare("SELECT * FROM categorie");
                // $query->execuute();
                // $result = $query->fetchAll(PDO::FETCH_ASSOC);


                ?>

                 <!-- hier moet er nog products section gemaakt worden -->

          
        <?php

        
        include_once ('defaults/info.php');
        include_once('defaults/socialm.php');
        include_once('defaults/footer.php');

        

        ?>
    </div>



</body>

</html>