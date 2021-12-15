<?php
include "Database.php";
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.


function getProducts(int $categoryId)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM product WHERE cat_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Product');

    return $request;
}

function getProduct(int $productId)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindParam("id", $productId);
    $query->execute();
    $request = $query->fetch(PDO::FETCH_ASSOC);

    return $request;
}
function    getProducts2()
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM product");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Product');

    return $request;
}

function updateProduct($prodName, $prodImg, $prodDescription, $id)
{
    global $pdo;

    // $query = $pdo->prepare("UPDATE `product` SET name = $prodName, picture = $prodImg, description =  $prodDescription WHERE id= '14'"); ($name,$description,$stars,$userId,$productId
    $query = $pdo->prepare("UPDATE `product` SET `name`='$prodName',`picture`='$prodImg',`description`='$prodDescription' WHERE id =  $id ");
    $query->execute();
    $request = $query;

    return $request;
}

function addProduct($name, $category, $img, $description)
{
    global $pdo;

    $q = "INSERT INTO product (name, cat_id, picture, description) VALUES (:name, :category, :img, :description)";
    $stmt = $pdo->prepare($q);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':img', $img);
    $stmt->bindParam(':description', $description);

    $stmt->execute();
    $request = $stmt;

    return $request;
}

function uploadFile(string $key) {
    $basePath = "/img/uploads/";
    $target_dir = DOC_ROOT . "/public$basePath";
    $target_file = $target_dir . basename($_FILES[$key]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES[$key]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES[$key]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$key]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$key]["name"])). " has been uploaded.";
            return $basePath .  $_FILES[$key]["name"];
        }
    }

    return false;
}

function deleteProduct($prodName)
{
    global $pdo;

    $q = "DELETE FROM product WHERE name = :name";




    $query = $pdo->prepare($q);
    $query->bindParam(':name', $prodName);
    $query->execute();
    $request = $query;

    return $request;
}
