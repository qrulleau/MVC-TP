<?php

session_start();

if (!isset($_SESSION['username'])){
  header('Location : http://www.localhost/MVC-TP/ ');
}

require_once __DIR__ . '/../models/movies.php';

function test (){
  global $title,$title,$producer;

  $title = $_POST['title'];
  $producer = $_POST['producer'];
  $synopsis = $_POST['synopsis'];
  $theme = $_POST['theme'];
  $scriptWriter = $_POST['scriptWriter'];
  $companyProduction = $_POST['companyProduction'];
  $yearProduction = $_POST['yearProduction'];
  $thumbnail = $_FILES['thumbnail'];

  if (isset($title)){
    Movies::addMovie($title,$producer,$synopsis,$theme,$scriptWriter,$companyProduction,$yearProduction,$thumbnail);
  }
}
test();

require_once __DIR__ . '/../views/backOffice/add.php';