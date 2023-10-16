<?php

class database 
{
  public function connexion(){

    $server = 'localhost';
    $user = 'qrulleau' ;
    $password = 'root' ;
    $bdd = 'mvc';
    try {
      $connexion = new PDO("mysql:host=$server;dbname=$bdd", $user, $password);
      return $connexion;
    } catch (PDOException $e) {
      echo "Erreur de connexion : " . $e->getMessage();
      return null;
    }
  }
}
