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
            foreach($requete->fetchAll() as $acteur) {
                ?>
                <tr>
                    <td><?= $acteur["prenom_personne"] ?></td>
                    <td><a href="filmographieActeur.php?action=rolesActeur&id=<?=$acteur['id_acteur']?>"><?= $acteur['nom_personne'] ?></a></td>
                    <td><?= $acteur["date_naiss_personne"] ?></td>
                    <td><?= $acteur["lieu_naiss_personne"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des acteurs";
    $titre_secondaire = "Liste des acteurs";
    $contenu = ob_get_clean();
    require "view/template.php";
?>