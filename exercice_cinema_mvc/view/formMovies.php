<?php ob_start(); ?>

<form class="formMovies" method="post" action="insertGenre">
    <label for="genre">Ajouter un genre</label>
    <input type="text">
    <input type="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de genres";
    $contenu = ob_clean();
    require "view/template.php";
?>