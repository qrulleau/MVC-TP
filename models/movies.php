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
    private string $thumbnail;
    private database $database;

    public function __construct(
        string $title,
        string $producer,
        string $synopsis,
        string $theme,
        string $scriptWriter,
        string $companyProduction,
        string $yearProduction,
        string $thumbnail
    ) {
        $this->title = $title;
        $this->producer = $producer;
        $this->synopsis = $synopsis;
        $this->theme = $theme;
        $this->scriptWriter = $scriptWriter;
        $this->companyProduction = $companyProduction;
        $this->yearProduction = $yearProduction;
        $this->thumbnail = $thumbnail;
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

    public static function getMovies(){
      global $movies;
      try {
        $db = database::connexion();
        $query = $db->prepare('SELECT * FROM movie');
        $query->execute();
        $movies = $query->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }
    public static function getMovie($id_book){
      try {
        global $movie;
        $db = database::connexion();
        $query = $db->prepare('SELECT * FROM movie WHERE id_movie = :id');
        $query->bindValue(':id',$id_book);
        $query->execute();
        $movie = $query->fetch(PDO::FETCH_ASSOC);
        return $movie;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return null;
      }
    }

    public static function updateMovie(
      string $title,
      string $producer,
      string $synopsis,
      string $theme,
      string $scriptWriter,
      string $companyProduction,
      array $thumbnail,
      int $yearProduction,
      int $id_movie
    ){
      try {
        $uploads_dir = 'assets/thumbnail';
        $tmp_name = $_FILES["thumbnail"]["tmp_name"];
        $name = basename($_FILES["thumbnail"]["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        
        $db = database::connexion();
        $query = $db->prepare(
          'UPDATE movie
           SET title_movie = :title,
              producer_movie = :producer,
              synopsis_movie = :synopsis,
              theme_movie = :theme,
              scriptWriter_movie = :scriptWriter,
              companyProduction_movie = :companyProduction,
              yearProduction_movie = :yearProduction,
              thumbnail_movie = :thumbnail
          WHERE id_movie = :id_movie;'
        );
        $query->bindValue(':title', $title);
        $query->bindValue(':producer', $producer);
        $query->bindValue(':synopsis', $synopsis);
        $query->bindValue(':theme', $theme);
        $query->bindValue(':scriptWriter', $scriptWriter);
        $query->bindValue(':companyProduction', $companyProduction);
        $query->bindValue(':yearProduction', $yearProduction);
        $query->bindValue(':thumbnail', $thumbnail["name"]);
        $query->bindValue(':id_movie', $id_movie);
        $query->execute();

        header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');
        return true;
    } catch (PDOException $e) {
        echo "Erreur de requête : " . $e->getMessage();
        return false;
    }

    }

    public static function deleteMovie($id_book){
      try {
        $db = database::connexion();
        $query = $db->prepare('DELETE FROM movie WHERE id_movie = :id');
        $query->bindValue(':id',$id_book);
        $query->execute();
        header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');
        return true;
      } catch (PDOException $e) {
        echo "Erreur de requete : " . $e->getMessage();
        return false;
      }
    }

    public static function addMovie(
      string $title,
      string $producer,
      string $synopsis,
      string $theme,
      string $scriptWriter,
      string $companyProduction,
      int $yearProduction,
      array $thumbnail
  ) {
      try {
          $uploads_dir = 'assets/thumbnail';
          $tmp_name = $_FILES["thumbnail"]["tmp_name"];
          $name = basename($_FILES["thumbnail"]["name"]);
          move_uploaded_file($tmp_name, "$uploads_dir/$name");
          
          $db = database::connexion();
          $query = $db->prepare('INSERT INTO movie (title_movie, producer_movie, synopsis_movie, theme_movie, scriptWriter_movie, companyProduction_movie, yearProduction_movie, thumbnail_movie) VALUES (:title, :producer, :synopsis, :theme, :scriptWriter, :companyProduction, :yearProduction, :thumbnail)');
          $query->bindValue(':title', $title);
          $query->bindValue(':producer', $producer);
          $query->bindValue(':synopsis', $synopsis);
          $query->bindValue(':theme', $theme);
          $query->bindValue(':scriptWriter', $scriptWriter);
          $query->bindValue(':companyProduction', $companyProduction);
          $query->bindValue(':yearProduction', $yearProduction);
          $query->bindValue(':thumbnail', $thumbnail["name"]);
          $query->execute();
          header('Location: http://www.localhost/MVC-TP/index.php?route=backoffice');
          return true;
      } catch (PDOException $e) {
          echo "Erreur de requête : " . $e->getMessage();
          return false;
      }
  }
  public static function searchMovies($title)
  {
  global $movies;
    try {
      $db = database::connexion();
      $query = $db->prepare('SELECT * FROM movie where title_movie like :title');
      $query->bindValue(':title', '%' . $title . '%');
      $query->execute();
      $movies = $query->fetchAll(PDO::FETCH_ASSOC);
      return $movies;
      
    } catch (PDOException $e) {
      echo "Erreur de requête : " . $e->getMessage();
      return false;
    }
  }
}
