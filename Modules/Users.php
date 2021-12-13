<?php 
include "Database.php";

function saveUser(){

    
    
 }

 function getUser(){
   global $pdo;

    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');
    
    return $result;
}
  // login information
 function getLoginInfo(){
   global $pdo;

  $q = "SELECT `id`,`name`, `email`, `role` FROM users WHERE email = :email AND password = :password";
  $stmt = $pdo->prepare($q);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);

  $email = $_POST['email']; 
  $password = $_POST['password']; 

  $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
  $stmt->execute();
  
  return $stmt;
}