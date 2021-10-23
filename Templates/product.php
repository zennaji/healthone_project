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
       
           
        
        
       echo "<h3>" . $product['name'] . "</h3>";
       echo "<img class='card-img-top' src=" . $product['picture']    . ">";
       echo "<p>" . $product['description'] . "</p>";
       
        include_once('defaults/footer.php');

        

        ?>
    </div>



</body>

</html>