<?php
include "Database.php";
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.


function getProducts(int $categoryId){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM product WHERE cat_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Product');

    return $request;
}

function getProduct(int $productId){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindParam("id", $productId);
    $query->execute();
    $request = $query->fetch(PDO::FETCH_ASSOC);

    return $request;
}
function getProducts2(){
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM product");
    $query->execute();
    $request = $query->fetchAll(PDO::FETCH_CLASS, 'Product');

    return $request;
}

function updateProduct($prodName,$prodImg,$prodDescription,$id){
    global $pdo;

    // $query = $pdo->prepare("UPDATE `product` SET name = $prodName, picture = $prodImg, description =  $prodDescription WHERE id= '14'"); ($name,$description,$stars,$userId,$productId
    $query = $pdo->prepare("UPDATE `product` SET `name`='$prodName',`picture`='$prodImg',`description`='$prodDescription' WHERE id =  $id ");
    $query->execute();
    $request = $query;

    return $request;
}

function addProduct($name,$category,$img,$description){
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
