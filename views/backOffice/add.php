<?php require_once __DIR__ . '/../../components/header.php' ?>

    <h1>Formulaire d'ajout de Film</h1>
    <form method="post">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title"><br><br>

        <label for="producer">Producteur :</label>
        <input type="text" id="producer" name="producer"><br><br>

        <label for="synopsis">Synopsis :</label>
        <textarea id="synopsis" name="synopsis" rows="4"></textarea><br><br>

        <label for="theme">Thème :</label>
        <input type="text" id="theme" name="theme"><br><br>

        <label for="scriptWriter">Scénariste :</label>
        <input type="text" id="scriptWriter" name="scriptWriter"><br><br>

        <label for="companyProduction">Société de Production :</label>
        <input type="text" id="companyProduction" name="companyProduction"><br><br>

        <label for="yearProduction">Année de Production :</label>
        <input type="number" id="yearProduction" name="yearProduction"><br><br>

        <input type="submit" value="Ajouter le Film">
    </form>

  <a href="http://www.localhost/MVC-TP/index.php?route=backoffice">retour sur le backoffice</a>
<?php require_once __DIR__ . '/../../components/footer.php' ?>

