<?php


require_once __DIR__ . '/../models/movies.php';
Movies::getMovies();
require_once __DIR__ . '/../views/backOffice/index.php';

