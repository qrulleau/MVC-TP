<?php

// ini_set('display_errors', 1); 
// ini_set('display_startup_errors', 1); 
// error_reporting(E_ALL);


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

  if (isset($title)){
    Movies::addMovie($title,$producer,$synopsis,$theme,$scriptWriter,$companyProduction,$yearProduction);
  }
}
test();

require_once __DIR__ . '/../views/backOffice/add.php';