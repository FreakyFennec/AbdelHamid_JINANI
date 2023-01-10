<?php ob_start(); ?>

<form class="addGenre" method="post" action="index.php?action=insertGenre">
    <label for="nom_genre">Ajouter un genre</label>
    <input name="nom_genre" type="text">
    <input type="submit" value="Ajouter">
</form>

<form action="index.php?action=addActeur" method="post" class="addActeur">
    <label for="">Nom</label>
    <input type="text">

    <label for="">Prénom</label>
    <input type="text">

    <label for="">Date naissance</label>
    <input type="text">

    <label for="">Lieu naissance</label>
    <input type="text">

    <label for="">Genre</label>
    <input type="text">

    <input type="submit" value="Ajouter">
</form>

<?php
    $titre = "La bdd films";
    $titre_secondaire = "Formulaire ajout de genres";
    $contenu = ob_get_clean();
    require "view/template.php";
?>