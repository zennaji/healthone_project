<?php function saveReview($name,$description,$stars,$userId,$productId){
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
 function getReviews(){

   // reviews from database print
   global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM reviews");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as &$data) {
        echo "<tr>";
        echo "<td>" . $data["name"] . "</td>";
        echo "<td>" . $data["description"] . "</td>";
        echo "<tr>";
    }
    return $result;
} 

