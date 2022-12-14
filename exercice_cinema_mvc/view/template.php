<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $titre ?></title>
        <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php?action=listFilms">Films</a></li>
                <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>

                <li><a href="index.php?action=filmographieActeur&id='. $id .'">Filmographie</a></li>

                <li><a href="index.php?action=listGenres">Genres</a></li>
                <li><a href="index.php?action=listRoles">Rôles</a></li>
                <li><a href="index.php?action=insertGenre">Ajouter genre</a></li>
                <li><a href="index.php?action=addActeur">Ajouter personne</a></li>
            </ul>
        </nav>
        
        <main>
            <div id="contenu">
                <h1 class="titrePrincipal"><?= $titre ?></h1>
                <h2 class="titreSecondaire"><?= $titre_secondaire ?></h2>
                <?= $contenu ?>
            </div>
        </main>
    </body>
</html>