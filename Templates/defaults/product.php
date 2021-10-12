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

        <div class="row gy-3 ">
            <div class="col-sm-4 col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <a href="/categories/1">
                            <img class="product-img img-responsive center-block" src='/img/categories/roeitrainer.jpg' />
                        </a>
                        <div class="card-title mb-3">Roeitrainer</div>
                    </div>

                </div>

                <?php
                $db = include('../Modules/Database.php');

                // $query = $db->prepare("SELECT * FROM categorie");
                // $query->execuute();
                // $result = $query->fetchAll(PDO::FETCH_ASSOC);


                ?>

            <!-- hier moet er nog product section gemaakt worden -->
        <?php

        
        include_once ('defaults/info.php');
        include_once('defaults/socialm.php');
        include_once('defaults/footer.php');

        

        ?>
    </div>



</body>

</html>