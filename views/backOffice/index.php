<?php require_once __DIR__ . '/../../components/header.php' ?>
  <div class="flex flex-wrap">
    <?php
      foreach($movies as &$movie){
    ?>
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
      <img class="w-full" src="/img/card-top.jpg" alt="">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?php echo $movie['title_movie'] ?></div>
        <p class="text-gray-700 text-base">
          <?php echo $movie['synopsis_movie'] ?>
        </p>
      </div>
      <div class="px-6 pt-4 pb-2">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?php echo $movie['producer_movie'] ?></span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?php echo $movie['scriptWriter_movie'] ?></span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"><?php echo $movie['companyProduction_movie'] ?></span>
      </div>
      <div class="d-flex">
        <a href="<?php echo 'http://www.localhost/MVC-TP/index.php?route=detail&id=' . $movie['id_movie'] ?>">En savoir plus</a>
        <a href="<?php echo 'http://www.localhost/MVC-TP/index.php?route=update&id=' . $movie['id_movie'] ?>">Modifier</a>
        <a href="<?php echo 'http://www.localhost/MVC-TP/index.php?route=delete&id=' . $movie['id_movie'] ?>">Supprimer</a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <div class="flex">
    <a href="http://www.localhost/MVC-TP/index.php?route=add">Ajouter un film</a>
  </div>
  
<?php require_once __DIR__ . '/../../components/footer.php' ?>