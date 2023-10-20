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

    public static function  getUser($email,$enteredPassword)
    {
      try {
        $db = database::connexion();
        $query = $db->prepare('SELECT * FROM user WHERE email_user = :email');
        $query->bindValue(':email',$email);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($enteredPassword, $user['password_user'])){
            session_start();
            $_SESSION['username'] = $user['username_user'];
            header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');   
            exit();     
        }
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }
    public static function createUser(
        $password,
        $email,
        $username
        ){
        try {
            $db = database::connexion();
            $query = $db->prepare(
                'INSERT INTO user (
                    password_user,
                    email_user,
                    username_user,
                    yearCreation_user) 
                VALUES (:password , 
                       :email,
                       :username,
                       :yearCreation)
            ');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query->bindValue(':email',$email);
            $query->bindValue(':username',$username);
            $query->bindValue(':password',$hashedPassword);
            $query->bindValue(':yearCreation', date('Y-m-d H:i:s')); 
            $query->execute(); 
            return true;
        } catch (PDOException $e) {
            echo "Erreur de requete : " . $e->getMessage();
            return null;
        }
    }
}