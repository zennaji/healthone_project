<?php
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
    $request = $query->fetch(PDO::FETCH_CLASS, 'Product');
    
    return $request;
}
