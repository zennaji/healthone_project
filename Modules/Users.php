<?php 
include "Database.php";

function saveUser(){

    
    
 }



 function getUser(){

   // reviews from database print
   global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // foreach ($result as &$data) {
    //     echo "<tr>";
    //     echo "<td>" . $data["name"] . "</td>";
    //     echo "<td>" . $data["description"] . "</td>";
    //     echo "<tr>";
    // }
    return $result;
}