<?php

$route = $_GET['route'] ?? 'accueil';


switch ($route) {
    case 'accueil':
        include 'controllers/AuthenticationController.php';
        break;
    case 'backoffice':
        include 'controllers/BackOfficeController.php';
        break;
    case 'detail':
        include 'controllers/DetailController.php';
        break;
    case 'delete':
        include 'controllers/DeleteController.php';
        break;
    case 'add':
        include 'controllers/AddController.php';
        break;
    case 'update':
        include 'controllers/UpdateController.php';
        break;
    default:
        include 'controllers/AuthenticationController.php';
}