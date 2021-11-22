<?php 
$admin = isset($_SESSION["myrole"]) && $_SESSION["myrole"] == "admin";
$user = isset($_SESSION["myrole"]) && $_SESSION["myrole"] == "user";
$guest = isset($_SESSION["myrole"]) && $_SESSION["myrole"] == "guest";

var_dump($admin);

?>