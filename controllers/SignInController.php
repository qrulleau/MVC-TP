<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

require_once __DIR__ . '/../models/user.php';
global $errors;
// $_SESSION['errors'] = " ";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($username)){
  $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W\_]).{8,}$/';
  $result = preg_match($regex, $password);
  if ($result) {
    
    User::createUser($password, $email, $username);
    header('Location: http://www.localhost/MVC-TP/');
    exit();
  } else {
      // $_SESSION['errors'] = "Votre mot de passe n'est pas valide";
      $errors = "Votre mot de passe n'est pas valide";
  }
  
}
require_once __DIR__ . '/../views/signin.php';