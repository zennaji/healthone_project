<?php 
function saveReview($userId,$description,$stars,$productId){
    global $pdo;
    $q = "INSERT INTO reviews (`title`,`description`, `stars`, `user_id`, `product_id`) VALUES ('', :description, :stars, :userId, :productId)";
    
    $stmt = $pdo->prepare($q);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':stars', $stars);
    $stmt->bindParam(':userId', $userId);
    $stmt->bindParam(':productId', $productId);

    $stmt->execute();
    
    
 }

   // reviews from database print
 function getReviews(int $productId){
   global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM reviews WHERE product_id = :id");
    $stmt->bindParam("id", $productId);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Review');
    
    return $result;
    
} 
//  function getReviews(int $productId){
//    global $pdo;
//     $stmt = $pdo->prepare("SELECT users.name, reviews.description, reviews.date, reviews.stars, reviews.product_id
//     FROM
//         reviews
//     LEFT JOIN 
//         users
//     ON
//         reviews.user_id = users.id");
//     $stmt->bindParam("id", $productId);
//     $stmt->execute();
//     $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Review');
    
//     return $result;
    
// } 

