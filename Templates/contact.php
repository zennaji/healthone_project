<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
//session_start();
?>

<body>
    <div class="cont1 container-fluid">
        <div class="row no-gutters">

            <?php
            include_once('defaults/menu.php');
            ?>
            
            <h1 class='title_contact' id='contact'>CONTACT</h1>
            <div class='contatct_container'>
                <div class='contact_description'>
                <p>
                    Get in touch with us!
                </p>
                </div>
                <div class='map'>
                    <div class='mapouter'>
                        <div class='gmap_canvas'>
                            <iframe width='450' height='350' id='gmap_canvas' src='https://maps.google.com/maps?q=Tinwerf10%2092&t=&z=14&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
                            </iframe>
                        </div>
                    </div>
                </div>
                <!-- ipeningstijden -->
                <div class="opening_time">
                    <table>
                        <tr>
                            <th>Dagen</th>
                            <th>Open om</th>
                            <th>Sluit om</th>
                        </tr>
                        <?php foreach($opnTijd as $data):  ?>
                        <tr>
                            <td><?= $data->day ?></td>
                            <td><?= $data->open_time	 ?></td>
                            <td><?= $data->close_time	 ?></td>
                        </tr>
                        <?php endforeach  ?>
                    </table>
                </div>
            </div>
        <?php  
            include_once('defaults/info.php');
            include_once('defaults/socialm.php');
            include_once('defaults/footer.php');
            ?>

        </div>
    </div>

</body>

</html>