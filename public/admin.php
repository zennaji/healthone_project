<?php
global $params;
// Controleer of de user een admin is 
if ($_SESSION["myrole"] == 'admin') {
    if (isset($params[2])) {
        switch ($params[2]) {
            case 'products':
                $titleSuffix .= ' | products-dashboard';

                if (isset($_POST['edit'])) {
                    $id =  filter_input(INPUT_POST, 'prodId');
                    $prodName = filter_input(INPUT_POST, 'prodName');
                    $prodImg = filter_input(INPUT_POST, 'prodImg');
                    $prodDescription = filter_input(INPUT_POST, 'prodDescription');

                    if (isset($_FILES['prodImg'])) {
                        // File upload
                        $path = uploadFile('prodImg');
                        if ($path) {
                            updateProduct($prodName, $path, $prodDescription, $id);
                        } else {
                            updateProductWithoutPic($prodName, $prodDescription, $id);
                        }
                    }
                } elseif (isset($_POST['delete'])) {
                    $id =  filter_input(INPUT_POST, 'prodId');
                    $prodName = filter_input(INPUT_POST, 'prodName');
                    $prodImg = filter_input(INPUT_POST, 'prodImg');
                    $prodDescription = filter_input(INPUT_POST, 'prodDescription');
                    deleteProduct($prodName);
                }
                // add product
                if (isset($_POST['addprod'])) {
                    echo 1;
                    $name =  filter_input(INPUT_POST, 'name');
                    $category = filter_input(INPUT_POST, 'category');
                    $img = filter_input(INPUT_POST, 'img');
                    $description = filter_input(INPUT_POST, 'description');

                    if (isset($_FILES['img'])) {
                        // File upload
                        $path = uploadFile('img');
                        if ($path) {
                            addProduct($name, $category, $path, $description);
                        }
                    }
                }
                $prod = getProducts2();
                $categ = getCategories();
               
                include_once(TEMPLATE_ROOT . "/admin/pages/products.php");
                break;
            case 'categories':
                $titleSuffix .= ' | categories-dashboard';
                $categ = getCategories();
                include_once(TEMPLATE_ROOT . "/admin/pages/categories.php");
                break;
            case 'users':
                $titleSuffix .= ' | users-dashboard';
                $user = getUser();
                include_once(TEMPLATE_ROOT . "/admin/pages/users.php");
                break;
        }
    }
} else {
    header("location:/404");
}
