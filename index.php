<?php

$route = $_GET['route'] ?? 'accueil';

// Déterminez quel contrôleur doit être appelé en fonction de la route
switch ($route) {
    case 'accueil':
        // Contrôleur pour la page d'accueil
        include 'controllers/authentication.php';
        break;
    case 'auth':
        // Contrôleur d'authentification
        include 'controllers/AuthentificationController.php';
        break;
    default:
        // Gérez d'autres routes (par exemple, une page 404)
        include 'controllers/authentication.php';
}