<?php ob_start(); ?>

<p class="">Il y a <?= $requete->rowCount() ?> acteurs</p>

<table class="">
    <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetch_all() as $film) { ?>
                <tr>
                    <td><?= $film["titre_film"] ?></td>
                    <td><?= $film["date_sortie_fr"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des films";
    $titre_secondaire = "Liste des films";
    $contenu = ob_get_clean();
    require "view/template.php";
?>