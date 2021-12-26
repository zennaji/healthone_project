<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>
    <div class="cont1 container-fluid">
        <?php
        include_once('defaults/menu.php');

        ?>
        <div class='card-con'>
            <?php foreach ($products as $data) : ?>
                <a href='<?= $categoryId . "/product/" . $data->id ?>'>
                    <div class='card'>
                        <img class='card-img-top' src=" <?= $data->picture ?> ">
                        <div class='card-body P-card-body'>
                            <h3><?= $data->name ?></h3>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>


    <?php
    include_once('defaults/socialm.php');
    include_once('defaults/footer.php');
    ?>

    </div>
</body>

</html>