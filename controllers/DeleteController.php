<?php
session_start();

if (!isset($_SESSION['username'])){
  header('Location : http://www.localhost/MVC-TP/ ');
}

require_once __DIR__ . '/../models/movies.php';
$id_book = $_GET['id'];
Movies::deleteMovie($id_book);
require_once __DIR__ . '/../views/backOffice/index.php';