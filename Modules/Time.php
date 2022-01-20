<?php 
include "Database.php";

function getOpenHours(){
    global $pdo;
 
     $stmt = $pdo->prepare("SELECT * FROM opening_hours");
     $stmt->execute();
     $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Time');
     
     return $result;
 }

?>