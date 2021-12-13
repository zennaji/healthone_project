<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Reviews.php';
require '../Modules/Users.php';
require '../Modules/Database.php';

define("DOC_ROOT", realpath(dirname(__DIR__)));
define("TEMPLATE_ROOT", realpath(DOC_ROOT . "/Templates"));

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
                if (isset($_POST['submit'])) {

                    // $name = strip_tags(filter_input(INPUT_POST, 'name'));   // in plaats van dit : $name = strip_tags($_POST['name']);
                    // if (empty($name) || ctype_space($name)) {
                    //     $errors['nameError'] = 'Voer je naam in!';
                    // }
                    if (isset($_SESSION['id'])) {
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
                            saveReview($_SESSION['id'], $description, $stars, $productId);
                        } else {

                            echo 'query error: ';
                        }
                    }
                }
            } else {
                include_once "../Templates/products.php";
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
        if (!isset($_SESSION['myrole'])) {
            include_once "../Templates/register.php";
        } else {
            header("location:/404");
        }
        break;
    case 'inloggen':

        $titleSuffix = ' | inloggen';
        if (!isset($_SESSION['myrole'])) {
            include_once "../Templates/inloggen.php";
        } else {
            header("location:/home");
        }
        break;
    case 'login_success':
        $titleSuffix = ' | login_success';
        include_once "../Templates/login_success.php";
        break;
    case 'uitloggen':
        $titleSuffix = ' | uitloggen';
        session_destroy();
        header('location: /inloggen');

        break;
    case 'admin':
        $titleSuffix = ' | admin';
        include_once "admin.php";
        break;
    case '404':
        $titleSuffix = ' | 404 Error';
        include_once "../Templates/404.php";
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
