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

function updateProduct($prodName,$prodImg,$prodDescription){
    global $pdo;

    $query = $pdo->prepare("UPDATE `product` SET name = $prodName, picture = $prodImg, description =  $prodDescription WHERE id= '14'");
    $query->execute();
    $request = $query;

    return $request;
}

// function deleteProduct($prodName){
//     global $pdo;

//     $query = $pdo->prepare("DELETE FROM product WHERE name=$prodName");
//     $query->execute();
//     $request = $query;

//     return $request;
// }
