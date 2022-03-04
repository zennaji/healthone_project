<?php
include "Database.php";

function saveUser()
{
}

function getUser()
{
  global $pdo;

  $stmt = $pdo->prepare("SELECT * FROM users");
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'User');

  return $result;
}
// login information
function getLoginInfo()
{
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

// update profile user info
function updateUserinfo($profileName)
{
  global $pdo;
  // $query = $pdo->prepare("UPDATE `product` SET name = $prodName, picture = $prodImg, description =  $prodDescription WHERE id= '14'"); ($name,$description,$stars,$userId,$productId
  $query = $pdo->prepare("UPDATE `users` SET `name`= $profileName WHERE name = " . $_SESSION["name"]);
  $query->execute();
  $request = $query;
  return $request;
}


/////==========================  test script !!!!! ================================

// $email = $_POST['email'];
//   $password = $_POST['password'];
//   global $pdo;

//   $q = "SELECT * FROM users WHERE email = ?";
//   $stmt = $pdo->prepare($q);
//   $stmt->bindParam(1, $email);

  
//    $stmt->execute();
//    $user =$stmt->fetch(PDO::FETCH_ASSOC);

//     var_dump($user['password']); 
//     var_dump($password);

//    if(password_verify($password, $user['password'])){
   
//     echo "success";
