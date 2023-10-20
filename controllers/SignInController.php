<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . '/../models/user.php';
global $errors;
$_SESSION['errors'] = " ";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($username)){
  $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W\_]).{8,}$/';
  $checkRegex = preg_match($regex, $password);
  $checkPassword = strpos($password,$username);
  // var_dump($password);
  // var_dump($username);
  // var_dump($checkPassword);
  // die();
  if ($checkRegex && $checkPassword === false) {
    User::createUser($password, $email, $username);
    header('Location: http://www.localhost/MVC-TP/');
    exit();
  } else {
      $_SESSION['errors'] = "Votre mot de passe n'est pas valide";
  }
  
}

require_once __DIR__ . '/../views/signin.php';