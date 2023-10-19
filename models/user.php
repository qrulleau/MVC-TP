<?php

require 'database.php';

class User
{
    private string $email;
    private string $password;
    private DateTime $yearCreation;
    private database $database;

    public function __construct(string $email, string $password, DateTime $yearCreation)
    {
        $this->email = $email;
        $this->password = $password;
        $this->yearCreation = $yearCreation;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getYearCreation(): DateTime
    {
        return $this->yearCreation;
    }

    public function setYearCreation(DateTime $yearCreation): void
    {
        $this->yearCreation = $yearCreation;
    }

    public static function  getUser($email)
    {
      try {
        $db = database::connexion();
        $querie = $db->prepare('SELECT * FROM user WHERE email_user = :email');
        $querie->bindValue(':email',$email);
        $querie->execute();
        $user = $querie->fetch(PDO::FETCH_ASSOC);
        if ($user){
            header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');   
            exit();     
        }
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }
}