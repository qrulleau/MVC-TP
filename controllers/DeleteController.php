<?php


require_once __DIR__ . '/../models/movies.php';
$id_book = $_GET['id'];
Movies::deleteMovie($id_book);
require_once __DIR__ . '/../views/backOffice/index.php';