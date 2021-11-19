<?php
include_once('defaults/head.php');

?>

<div class="cont1 container-fluid">

    <?php
    include_once('defaults/menu.php');
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
                            <li><i class="fa fa-sign-out"></i> Categorieen</li>
                        </a>
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

                <?php
                foreach ($prod as $data) {
                    echo " <div class='product_all'>   
                            <div class='product_in_control'>
                                <img src='$data->picture' width='200px' alt=''>
                                <div class='edit_remove_product'>
                                    <p>WIJZIGEN <i class='editpro_btn far fa-edit'></i> </p>
                                    <p>VERWIJDEREN <i class='delete_btn far fa-trash-alt'></i></p>
                                </div>
                        </div>  ";
                    echo " <div class='edit_form invisible'>
                                <form action='' method='Post' class=''>
                                    <input type='hidden' id='prodId' name='prodId' value='$data->id'><br>
                                    <label for='title'>TITLE:</label><br>
                                    <input type='text' id='title' name='prodName' value='$data->name'><br>
                                    <label for='prod_img'>PHOTO:</label><br>
                                    <input type='file' id='prod_img' name='prodImg' value='$data->picture'><br>
                                    <label for='prod_desc'>Description:</label><br>
                                    <textarea type='text' id='prod_desc' name='prodDescription' value=''>$data->description</textarea><br>
                                    <button  type='submit' name='edit' class='edit_btn'  >Wijzigen</button>
                                </form>
                            </div>
                        </div>
                        ";
                    // echo $data->picture;
                    if (isset($_FILES["file"])) {
                        echo realpath($_FILES["file"]["tmp_name"]);
                    }
                }
                ?>
            </div>

            <button class="add_product_btn">Voeg een apparaat toe <i class="far fa-plus-square"></i></button>
            <div class="add_pro_section invisible">
                <div class="edit_form ">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="Post" class="">
                        <label for="title">TITLE:</label><br>
                        <input type="text" id="title" name="name" value=""><br>
                        <label for="category">CATEGORY:</label><br>
                        <select name="category" id="category" class="category_">
                            <option value="">category1 </option>
                            <option value="">category2 </option>
                            <option value="">category3 </option>
                            <option value="">category4 </option>
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


    <?php
    include_once('defaults/footer.php');
    ?>
</div>