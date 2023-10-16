<?php

require 'database.php';

class Movies
{
    private string $title;
    private string $producer;
    private string $synopsis;
    private string $theme;
    private string $scriptWriter;
    private string $companyProduction;
    private int $yearProduction;
    private database $database;

    public function __construct(
        string $title,
        string $producer,
        string $synopsis,
        string $theme,
        string $scriptWriter,
        string $companyProduction,
        string $yearProduction
    ) {
        $this->title = $title;
        $this->producer = $producer;
        $this->synopsis = $synopsis;
        $this->theme = $theme;
        $this->scriptWriter = $scriptWriter;
        $this->companyProduction = $companyProduction;
        $this->yearProduction = $yearProduction;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getProducer(): string
    {
        return $this->producer;
    }

    public function setProducer(string $producer): void
    {
        $this->producer = $producer;
    }

    public function getSynopsis(): string
    {
        return $this->synopsis;
    }

    public function setSynopsis(string $synopsis): void
    {
        $this->synopsis = $synopsis;
    }

    public function getTheme(): string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): void
    {
        $this->theme = $theme;
    }

    public function getScriptWriter(): string
    {
        return $this->scriptWriter;
    }

    public function setScriptWriter(string $scriptWriter): void
    {
        $this->scriptWriter = $scriptWriter;
    }

    public function getCompanyProduction(): string
    {
        return $this->companyProduction;
    }

    public function setCompanyProduction(string $companyProduction): void
    {
        $this->companyProduction = $companyProduction;
    }

    public function getYearProduction(): string
    {
        return $this->yearProduction;
    }

    public function setYearProduction(string $yearProduction): void
    {
        $this->yearProduction = $yearProduction;
    }

    public function getMovies(){
      try {
        $db = database::connexion();
        $querie = $db->prepare('SELECT * FROM Movies');
        $querie->execute();
        $movies = $querie->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }
    public function getMovie(){
      try {
        $id_book = $_GET['id'];
        $db = database::connexion();
        $querie = $db->prepare('SELECT * FROM Movies WHERE ID_MOVIE = :id');
        $querie->bindValue(':id',$id_book);
        $querie->execute();
        $movie = $querie->fetch(PDO::FETCH_ASSOC);
        return $movie;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }

    public function updateMovie(){

    }

    public function deleteMovie(){
      try {
        $id_book = $_GET['id'];
        $db = database::connexion();
        $querie = $db->prepare('DELETE FROM MOVIES WHERE ID_MOVIE = :id');
        $querie->bindValue(':id',$id_book);
        $querie->execute();
        return true;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return false;
      }
    }

    public function createMovie(){

    }
}
