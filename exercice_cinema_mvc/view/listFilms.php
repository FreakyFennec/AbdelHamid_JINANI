<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount() ?> films</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Année sortie</th>
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