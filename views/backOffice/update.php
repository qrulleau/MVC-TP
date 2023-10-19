<?php require_once __DIR__ . '/../../components/header.php' ?>

    <h1 class="text-center">Formulaire de modification de Film</h1>
    <form method="post">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="<?php echo $movie['title_movie']?>">

        <label for="producer">Producteur :</label>
        <input type="text" id="producer" name="producer" value="<?php echo $movie['producer_movie']?>">

        <label for="synopsis">Synopsis :</label>
        <textarea id="synopsis" name="synopsis" rows="4"><?php echo $movie['synopsis_movie']?></textarea>

        <label for="theme">Thème :</label>
        <input type="text" id="theme" name="theme" value="<?php echo $movie['theme_movie']?>">

        <label for="scriptWriter">Scénariste :</label>
        <input type="text" id="scriptWriter" name="scriptWriter" value="<?php echo $movie['scriptWriter_movie']?>">

        <label for="companyProduction">Société de Production :</label>
        <input type="text" id="companyProduction" name="companyProduction" value="<?php echo $movie['companyProduction_movie']?>">

        <label for="yearProduction">Année de Production :</label>
        <input type="number" id="yearProduction" name="yearProduction" value="<?php echo $movie['yearProduction_movie']?>">

        <input type="submit" value="Modifier le Film">
    </form>

  <a href="http://www.localhost/MVC-TP/index.php?route=backoffice">retour sur le backoffice</a>
<?php require_once __DIR__ . '/../../components/footer.php' ?>

