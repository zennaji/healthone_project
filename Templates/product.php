<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');


?>

<body>


    <?php
    include_once('defaults/menu.php');



    echo "<div class='product_container'>";
        echo "<div class='product_text'>";
                echo "<h3>" . $product['name'] . "</h3>";
                echo "<p>" . $product['description'] . "</p>";
                echo "</div>";
                echo "<div class='product_foto'>";
                echo "<img class='prod_pic' src=" . $product['picture']    . ">";
                echo "</div>";
            //         echo "<div class='product_reviews'>";
            // echo "</div>";
    echo "</div>";

    include_once('defaults/product_reviews.php');
    include_once('defaults/footer.php');
    ?> 

</body>

</html>