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
function getLoginInfo($email)
{
  global $pdo;

  $q = "SELECT * FROM users WHERE email = :email";
  $stmt = $pdo->prepare($q);
  $stmt->bindParam(':email', $email);
  // $stmt->bindParam(':password', $password);


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


