<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Reviews.php';
require '../Modules/Users.php';
require '../Modules/Database.php';
session_start();
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    
    case 'categories':
        $titleSuffix = ' | Categories';

        if (isset($_GET['category_id'])) {
            $categoryId = $_GET['category_id'];
            $products = getProducts($categoryId);
            $name = getCategoryName($categoryId);

            if (isset($_GET['product_id'])) {
                $productId = $_GET['product_id'];
                $product = getProduct($productId);

                include_once "../Templates/product.php";

                // echo "<h3>" . $product['name'] . "</h3>";


                $titleSuffix = ' | ' . $product['name'];

                // if (isset($_POST['name']) && isset($_POST['review'])) {
                //     saveReview($_POST['name'], $_POST['review']);
                //     $reviews = getReviews($productId);
                // }
                // include_once "../Templates/defaults/product_reviews.php";
                $errors = [
                    'nameError' => '',
                    'descriptionError' => '',
                ];
               
                // include "../Modules/Database.php";
                if (isset($_POST['submit'])) {
            
                    $name = strip_tags(filter_input(INPUT_POST, 'name'));   // in plaats van dit : $name = strip_tags($_POST['name']);
                    if (empty($name) || ctype_space($name)) {  
                        $errors['nameError'] = 'Voer je naam in!';   
                    }

                    $description = strip_tags(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS));
                    if (empty($description) || ctype_space($description)) {   
                        $errors['descriptionError'] = 'Voer je view in!';   
                    }
                
                    $stars = filter_input(INPUT_POST, 'stars', FILTER_VALIDATE_INT);                        
                
                    if (isset($_POST['user_id'])) {
                        $userId = strip_tags($_POST['user_id']);
                        if (empty($userId) || ctype_space($description)) {   
                            $errors['descriptionError'] = 'Je moet ingelogd zijn voor een review';   
                        }
                        
                    }
            
                    
                    if (isset($_POST['product_id'])) {
                        $productId = strip_tags($_POST['product_id']);   
                    }
        
                    if (!array_filter($errors)) {
                        //session_start();
                        saveReview($name,$description,$stars,$userId,$productId);
                       
                        
                        
                        
                    } else {
                    
                        // echo 'query error: ' . mysqli_error($dsn);
                        echo 'query error: ';
                    }
                }
                


                // TODO Zorg dat je hier de product pagina laat zien


                // include_once "../Templates/product.php";


            } else {
                // TODO Zorg dat je hier alle producten laat zien van een categorie
                include_once "../Templates/products.php";


                //$product = getProduct($productId);

                //var_dump($product);
            }
        } else {
            // TODO Toon de categorieen
            $categories = getCategories();
            include_once "../Templates/categories.php";
        }
        break;

        
    case 'contact':
        $titleSuffix = ' | Contant';
        include_once "../Templates/contact.php";
        break;
    case 'register':
        $titleSuffix = ' | register';
        include_once "../Templates/register.php";
        break;
        case 'inloggen':
            $titleSuffix = ' | inloggen';
            include_once "../Templates/inloggen.php";
            break;
        case 'login_success':
            $titleSuffix = ' | login_success';
            include_once "../Templates/login_success.php";
            break;
        case 'uitloggen':
            $titleSuffix = ' | uitloggen';
            include_once "../Templates/uitloggen.php";
            break;
        case 'dashboard':
            $titleSuffix = ' | dashboard';
            $prod = getProducts2();
            include_once "../Templates/dashboard.php";
            if (isset($_POST['edit'])) {
                $id =  filter_input(INPUT_POST, 'prodId');
                $prodName = filter_input(INPUT_POST, 'prodName');
                $prodImg = filter_input(INPUT_POST, 'prodImg');
                $prodDescription = filter_input(INPUT_POST, 'prodDescription');
                

                updateProduct($prodName,$prodImg,$prodDescription,$id);

            }
           
        

            
            break;
            
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle()
{
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
