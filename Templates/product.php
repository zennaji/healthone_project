<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');


?>

<body>


    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');



    echo "<div class='product_container'>";
        echo "<h3>" . $product['name'] . "</h3>";
        echo "<img class='prod_pic' src=" . $product['picture']    . ">";
        echo "<p>" . $product['description'] . "</p>";
    echo "</div>";
    echo "<div class='product_reviews'>";
    echo "</div>";

    include_once('defaults/product_reviews.php');



    include_once('defaults/footer.php');
    ?> 
    
       



</body>

</html>