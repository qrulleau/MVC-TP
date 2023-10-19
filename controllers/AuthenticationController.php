<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


require_once __DIR__ . '/../views/login.php';
require_once __DIR__ . '/../models/user.php';

function authenfication(){

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (isset($email) && isset($password)){
    User::getUser($email);
  }
}

authenfication();
