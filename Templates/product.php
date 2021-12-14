<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <?php
    include_once('defaults/menu.php');

    echo "<div class='product-name-container '>";
    echo "<h3 class='product-name'>" . $product['name'] . "</h3>";
    echo "</div>";

    echo "<div class='product_container grid'>";

    echo "<div class='product_text grid-item'>";
    echo "<p>" . $product['description'] . "</p>";

    echo "</div>";

    echo "<div class='product_foto grid-item'>";
    echo "<img class='prod_pic' src=" . $product['picture']    . ">";
    echo "</div>";

    echo "</div>";

    include_once('defaults/product_reviews.php');
    include_once('defaults/footer.php');

    ?>

</body>

</html>