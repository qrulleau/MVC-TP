<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


require_once __DIR__ . '/../views/signin.php';
require_once __DIR__ . '/../models/user.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if (isset($username)){
  User::createUser($password,$email,$username);
  header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');
}