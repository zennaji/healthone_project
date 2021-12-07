<?php
// include_once('defaults/head.php');
include_once(TEMPLATE_ROOT . "/defaults/head.php");
?>

<div class="cont1 container-fluid">
    <div class="row no-gutters">
        <?php
        // include_once('defaults/menu.php')
        include_once(TEMPLATE_ROOT . "/defaults/menu.php");;
        ?>
        <div class="dashboard_container">
            <div class="control_menu">
                <h2>DASHBOARD</h2>
                <div class="dash_menu_items">
                    <div class="admin_title">
                        <h3>ADMIN</h3>
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <div class="dash_list">
                        <ul>
                            <a href="">
                                <li><i class="fa fa-users"> </i> Producten</li>
                            </a>
                            <a href="">
                                <li><i class="fa fa-sign-out"></i> Categorieen</li </a>
                                <a href="">
                                    <li><i class="fa fa-sign-out"></i> Users</li>
                                </a>
                                <a href="">
                                    <li><i class="fa fa-sign-out"></i> Uitloggen</li>
                                </a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 2de side -->
            <div class="control_section">
                <h2>Producten</h2>
                <div class="control_screen">

                    <?php foreach ($prod as $data) :  ?>

                        <div class='product_all'>
                            <div class='product_in_control'>
                                <img src='<?php echo $data->picture; ?>' width='200px' alt=''>
                                <div class='edit_remove_product'>
                                    <p>WIJZIGEN <i class='editpro_btn far fa-edit'><i class='delete_btn far fa-trash-alt'></i></i> </p>
                                </div>
                            </div>
                            <div class='edit_form invisible'>
                                <form action='' method='Post' >
                                    <input type='hidden' id='prodId' name='prodId' value='<?php echo $data->id; ?>'><br>
                                    <label for='title'>TITLE:</label><br>
                                    <input type='text' id='title' name='prodName' value='<?php echo $data->name; ?>'><br>
                                    <label for='prod_img'>PHOTO:</label><br>
                                    <input type='file' id='prod_img' name='prodImg' value='<?php echo $data->picture; ?>'><br>
                                    <label for='prod_desc'>Description:</label><br>
                                    <textarea type='text' id='prod_desc' name='prodDescription' value=''><?php echo $data->description; ?></textarea><br>
                                    <button type='submit' name='edit' class='edit_btn'>Wijzigen</button>
                                    <button type='submit' name='delete' class='edit_btn' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>VERWIJDEREN</button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach;  ?>
                </div>

                <button class="add_product_btn">Voeg een apparaat toe <i class="far fa-plus-square"></i></button>
                <div class="add_pro_section invisible">
                    <div class="edit_form ">
                        <form action="/admin/dashboard" method="Post">
                            <label for="title">TITLE:</label><br>
                            <input type="text" id="title" name="name" value=""><br>
                            <label for="category">CATEGORY:</label><br>
                            <select name="category" id="category" class="category_">
                                <?php
                                foreach ($categ as $data) {
                                    echo "<option value='$data->id'>$data->name </option>";
                                }
                                ?>
                            </select><br>
                            <label for="prod_img">PHOTO:</label><br>
                            <input type="file" id="prod_img" name="img" value=""><br>
                            <label for="prod_desc">Description:</label><br>
                            <textarea type="text" id="prod_desc" name="description" value=""></textarea><br>
                            <button name="addprod" class="addprod" placeholder="edit" value="">Voeg toe</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    // include_once('defaults/footer.php');
    ?>
</div>

<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.js"></script>