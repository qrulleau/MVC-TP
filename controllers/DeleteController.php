<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


require_once __DIR__ . '/../models/movies.php';
$id_book = $_GET['id'];
Movies::deleteMovie($id_book);
require_once __DIR__ . '/../views/backOffice/index.php';