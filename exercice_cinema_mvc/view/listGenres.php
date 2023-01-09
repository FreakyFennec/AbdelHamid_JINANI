<?php  ob_start();?>

<table class="">
    <thead>
        <tr>
            <th>Genre</th>
            <th>Nbre de films</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($requete->fetchAll() as $genre) { ?>
                <tr>                    
                    <td><a href="index.php?action=listParGenre&id=<?= $genre["id_genre_film"] ?>"><?= $genre["type_genre_film"] ?></a></td>
                    <td><?= $genre["nbr_films"] ?></td>
                </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    $titre = "Liste des genres de films";
    $titre_secondaire = "Liste des genres de films : ";
    $contenu = ob_get_clean();
    require "view/template.php";
?>