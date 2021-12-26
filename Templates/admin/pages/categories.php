<?php include_once(TEMPLATE_ROOT . "/admin/layout/dashboard.php");?>

<div class="control_section">
                <h2>Categories</h2>
                <button class="add_product_btn">Voeg een category toe <i class="far fa-plus-square"></i></button>
                <div class="add_pro_section add_pro_sectionC invisible">
                    <div class="edit_form ">
                        <form action="" method="Post" enctype="multipart/form-data">
                            <label for="title">TITLE:</label><br>
                            <input type="text" id="title" name="name" value=""><br>
                            <button name="addcat" class="addprod" placeholder="edit" value="">Voeg toe</button>
                        </form>
                    </div>
                </div>
                <div class="control_screen .control_screenC">

                
         
                <?php foreach ($categ as $data): ?>
                                   <div class="card cates" style="height: 5rem;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item"><?=$data->id ." " .$data->name  ?></li>
                                        </ul>
                                    </div>
                                    <?php endforeach ?>
                                 
                                



               
                </div>

               
                
            </div>


            <!-- Those lines are from dashboard layout -->
            </div>
    </div>
</div>
<script src="/js/script.js"></script>
<script src="/js/bootstrap.bundle.js"></script>