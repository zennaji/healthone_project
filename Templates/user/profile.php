<!DOCTYPE html>
<html>
<?php
include_once(TEMPLATE_ROOT . "/defaults/head.php");

?>

<body>
    <div class=" container-fluid">

        <?php
        include_once(TEMPLATE_ROOT . "/defaults/menu.php");
        ?>
        <div class="container-fluid">
            <div class="setting_title">
                <h3>PROFILE</h3>
            </div>
            <div class="profile_details">
                <div class="profile_header">
                    <img src="/public/img/user/noprofil.jpg " width="160px">
                    <input type="file">
                    <div class="profile_foto_icons">
                        <!-- <i class=' far fa-trash-alt'></i> -->
                        <i class="fas fa-camera"></i>                    </div>
                    <h5>Welkome <?= $_SESSION["name"]; ?></h5>
                </div>
                <div class="profile_body">
                    <form action="" method="post">
                        <div class="profile_name">
                            <div class="name_info">
                                <label for="name">Naam:</label>
                                <p> <?= $_SESSION["name"]; ?></p>
                                <i class="far fa-edit"></i>
                            </div>
                            <div class="name_input inpt invisible">
                                <input type="text" name="profileName"><br>
                                <button type="submit" name="nameSubmit">Bijwerken</button>
                            </div>
                        </div>
                        <div class="profile_email ">
                            <div class="email_info">
                                <label for="email">Email:</label>
                                <p> <?= $_SESSION["email"]; ?></p>
                                <i class="far fa-edit"></i>
                            </div>
                            <div class="email_input inpt invisible">
                                <input type="text" name="profileEmail"><br>
                                <button type="submit" name="emailSubmit">Bijwerken</button>
                            </div>
                        </div>
                        <div class="profile_pass">
                            <div class="pass_info">
                                <label for="pass">Wachtwoord:</label>
                                <p>********</p>
                                <i class="far fa-edit"></i>
                            </div>
                            <div class="pass_input inpt invisible">
                                <input type="text" name="profilePass" placeholder="Huidige wachtwoord"><br>
                                <input type="text" name="profilePassNew" placeholder="Nieuwe wachtwoord"><br>
                                <input type="text" name="profilePassNew2" placeholder="Herhaal nieuwe wachtwoord"><br>
                                <button type="submit" name="passSubmit">Bijwerken</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


















        <?php include_once(TEMPLATE_ROOT . "/defaults/footer.php");  ?>
    </div>
</body>
<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.js"></script>