<?php 
    ob_start();
    $film = $requete->fetch(); 
?>

<h1><?= $film["titre_film"] ?></h1>
<p>Réalisateur : <?= $film["nom_realisateur"] ?></p>

<h2>Casting</h2>
<!-- fetchAll pour lister le casting du film (acteur + rôle) -->

<?php
    $titre = "Détail du film";
    $titre_secondaire = "Titre du film";
    $contenu = ob_get_clean();
    require "view/template.php";
?>