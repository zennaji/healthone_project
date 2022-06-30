<?php
include_once(TEMPLATE_ROOT . "/defaults/head.php");
?>
<div class="cont1 container-fluid">
    <div class="row no-gutters">
        <?php
        include_once(TEMPLATE_ROOT . "/defaults/menu.php");
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
                            <a href="/admin/products">
                                <li><i class="fa fa-users"> </i> Producten</li>
                            </a>
                            <a href="/admin/categories">
                                <li><i class="fa fa-sign-out"></i> Categorieen</li </a>
                                <a href="/admin/users">
                                    <li><i class="fa fa-sign-out"></i> Users</li>
                                </a>
                                <a href="/uitloggen">
                                    <li><i class="fa fa-sign-out"></i> Uitloggen</li>
                                </a>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 2de side -->

        
 