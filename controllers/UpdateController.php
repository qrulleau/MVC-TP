<?php

require_once __DIR__ . '/../models/movies.php';
$id_movie = $_GET['id'];
$title = $_POST['title'];
$producer = $_POST['producer'];
$synopsis = $_POST['synopsis'];
$theme = $_POST['theme'];
$scriptWriter = $_POST['scriptWriter'];
$companyProduction = $_POST['companyProduction'];
$yearProduction = $_POST['yearProduction'];
$thumbail = $_FILES["thumbnail"];
Movies::getMovie($id_movie);


if (isset($title)){
  Movies::updateMovie($title,$producer,$synopsis,$theme,$scriptWriter,$companyProduction,$thumbail,$yearProduction,$id_movie);
}





require_once __DIR__ . '/../views/backOffice/update.php';