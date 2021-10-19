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
        ?>


               
        <?php
       
       foreach ($productId as $data) {
            echo "<h3>" . $data->name . "</h3>";
            echo "<img class='card-img-top' src=" . $data->picture    . ">";
            echo "<p>" . $data->description . "</p>";
        
           
        
        
       }
       
        include_once('defaults/footer.php');

        

        ?>
    </div>



</body>

</html>