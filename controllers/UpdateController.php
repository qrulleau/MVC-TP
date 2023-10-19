<?php

// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);


require_once __DIR__ . '/../models/movies.php';


$id_movie = $_GET['id'];
$title = $_POST['title'];
$producer = $_POST['producer'];
$synopsis = $_POST['synopsis'];
$theme = $_POST['theme'];
$scriptWriter = $_POST['scriptWriter'];
$companyProduction = $_POST['companyProduction'];
$yearProduction = $_POST['yearProduction'];

Movies::getMovie($id_movie);


if (isset($title)){
  Movies::updateMovie($title,$producer,$synopsis,$theme,$scriptWriter,$companyProduction,$yearProduction,$id_movie);
}





require_once __DIR__ . '/../views/backOffice/update.php';