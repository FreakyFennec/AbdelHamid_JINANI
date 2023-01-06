<?php 
    ob_start();
    $personne = $requete->fetch(); // fetch pacequ'on cherche qu'une ligne.
?>

<h1><?= $personne["nom_personne"]?></h1>

<h2>Filmographie</h2>

<table class="">
    <thead>
        <tr></tr>
        <tr></tr>
    </thead>
</table>
<!-- fetchAll on récupére plusieures lignes -->
<?php
    foreach($requete->fetchAll() as $role) { ?>

    }

?>

<?php

    $titre = "Filmographie acteur";
    $titre_secondaire = "Filmographie acteur";
    $contenu = ob_get_clean();
    require "view/template.php";
?>