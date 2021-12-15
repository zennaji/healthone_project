<?php

global $params;

// Controleer od de user een admin is 
if ($_SESSION["myrole"] == 'admin') {
    if (isset($params[2])) {
        switch ($params[2]) {
            case 'dashboard':
                $titleSuffix .= ' | dashboard';

                if (isset($_POST['edit'])) {
                    $id =  filter_input(INPUT_POST, 'prodId');
                    $prodName = filter_input(INPUT_POST, 'prodName');
                    $prodImg = filter_input(INPUT_POST, 'prodImg');
                    $prodDescription = filter_input(INPUT_POST, 'prodDescription');

                    if (isset($_FILES['prodImg'])) {
                        // File upload
                        $path = uploadFile('prodImg');
                        if ($path !== false) {
                            updateProduct($prodName, $path, $prodDescription, $id);
                        }
                    }
                } elseif (isset($_POST['delete'])) {
                    $id =  filter_input(INPUT_POST, 'prodId');
                    $prodName = filter_input(INPUT_POST, 'prodName');
                    $prodImg = filter_input(INPUT_POST, 'prodImg');
                    $prodDescription = filter_input(INPUT_POST, 'prodDescription');
                    deleteProduct($prodName);
                }


                if (isset($_POST['addprod'])) {
                    echo 1;
                    $name =  filter_input(INPUT_POST, 'name');
                    $category = filter_input(INPUT_POST, 'category');
                    $img = filter_input(INPUT_POST, 'img');
                    // $target = "img/".basename($_FILES['img']['name']);
                    // $img = $_FILES['img']['name'];
                    $description = filter_input(INPUT_POST, 'description');

                    if (isset($_FILES['img'])) {
                        // File upload
                        $path = uploadFile('img');
                        if ($path) {
                            addProduct($name, $category, $path, $description);
                           
                            //header("Refresh:0");



                        }
                    }
                    // Show error



                }

                $prod = getProducts2();
                $categ = getCategories();
                include_once(TEMPLATE_ROOT . "/admin/dashboard.php");


                break;
        }
    }
} else {
    header("location:/404");
}
