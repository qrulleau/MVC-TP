<?php require_once __DIR__ . '/../../components/header.php' ?>
    <div class="d-flex justify-center align-center">
      <div class="presentation">
        <h1 class="movie-title"><?php echo $movie['title_movie']?></h1>
        <div class="movie-info">
            <p><strong>Réalisateur:</strong> <?php echo $movie['producer_movie']?></p>
            <p><strong>Scénariste:</strong> <?php echo $movie['scriptWriter_movie']?></p>
            <p><strong>Sociétés de production:</strong> <?php echo $movie['companyProduction_movie']?></p>
            <p><strong>Genre:</strong> <?php echo $movie['theme_movie']?></p>
            <p><strong>Année de production:</strong> <?php echo $movie['yearProduction_movie']?></p>
        </div>
        <div class="movie-description">
            <p><?php echo $movie['synopsis_movie']?></p>
        </div>
        <img class="movie-thumbnail" src="http://www.localhost/MVC-TP/assets/thumbnail/<?php echo $movie['thumbnail_movie']?>" alt="Thumbnail du film">
      </div>
    </div>
    <div class="d-flex justify-center">
      <a class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 my-8" href="http://www.localhost/MVC-TP/index.php?route=backoffice">Retour</a>
    </div>

<?php  require_once __DIR__ . '/../../components/header.php' ?>