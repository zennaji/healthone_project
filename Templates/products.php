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


        foreach ($products as $data) {
            echo "<div class='card' >";
            echo "<img class='card-img-top' src=" . $data->picture    . ">";
            echo "<div class='card-body P-card-body' >";
            echo "<h3>" . $data->name . "</h3>";
            echo "<p>" . $data->description . "</p>";



            echo "</div>";

            echo "</div>";
        }

        ?>

        <?php


        include_once('defaults/info.php');
        include_once('defaults/socialm.php');
        include_once('defaults/footer.php');



        ?>
    </div>



</body>

</html>