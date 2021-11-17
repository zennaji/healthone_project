<?php 
function saveReview($name,$description,$stars,$userId,$productId){
    global $pdo;
    $q = "INSERT INTO reviews (`title`, `description`, `stars`, `user_id`, `product_id`) VALUES (:name, :description, :stars, :userId, :productId)";
    $stmt = $pdo->prepare($q);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':stars', $stars);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':productId', $productId);

    $stmt->execute();
    
    
 }
function getReviews(int $productId){

   // reviews from database print
   global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM reviews WHERE product_id = :id");
    $stmt->bindParam("id", $productId);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Review');
   
    return $result;
} 

