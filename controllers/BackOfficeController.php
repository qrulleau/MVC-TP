<?php

require_once __DIR__ . '/../models/movies.php';
Movies::getMovies();
$title_search = $_POST['title_search'];
if (isset($title_search)){
  Movies::searchMovies($title_search);
}
require_once __DIR__ . '/../views/backOffice/index.php';

