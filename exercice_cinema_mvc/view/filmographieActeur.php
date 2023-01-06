<?php ob_start(); ?>

<table class="">
    <thead>
        <tr>
            <th>Nom acteur</th>
            <th>Rôle</th>
            <th>Film</th>
            <th>Date sortie fr</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $role) { ?>
                <tr>
                    <td><?= $role["nom_acteur"] ?></td>
                    <td><?= $role["nom_role"] ?></td>
                    <td><?= $role["titre_film"] ?></td>
                    <td><?= $role["date_sortie_fr"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Filmographie";
    $titre_secondaire = "Filmographie";
    $contenu = ob_get_clean();
    require "view/template.php";
?>