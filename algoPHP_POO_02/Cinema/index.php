<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>Cinéma</h1>

    <?php
        spl_autoload_register(function ($class_name) { // Pour faire des includes. Les noms de fichiers et de classes doivent se correspondre.
            include $class_name . '.php';
        });

        $georgeLucas = new Director ("George", "Lucas", "Man", "1944-05-14");     // On définit une personne.

        echo $georgeLucas->displayInfosPerson();    // On affiche les infos de la personne.
echo "<p>=====================================</p>";
        $sciFi = new Genre("Science Fiction");      // On définit le genre du film.

        // On définit les infos du film plus les instanciations de la personne et du genre.
        $movie = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        echo $georgeLucas->displayMovies();     // On affiche les infos du film.

        $aventure = new Genre("Aventure");

        $movie = new Movie("Le aveturiers de l'arche perdu", $georgeLucas, 1981, 115, $aventure, "1936. Parti à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : le Français René Belloq.
        Revenu à la vie civile à son poste de professeur universitaire d'archéologie, il est mandaté par les services secrets et par son ami Marcus Brody, conservateur du National Museum de Washington, pour mettre la main sur le Médaillon de Râ, en possession de son ancienne amante Marion Ravenwood, désormais tenancière d'un bar au Tibet. (AlloCiné).");

echo "<p>=====================================</p>";

        $starWarIV = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        $hFord = new Actor("Ford","Harrison", "Man", "1942-07-13",);
        $cFisher = new Actor("Fisher", "Carrie", "Woman", "1956-10-21");

        echo $hFord->displayInfosActor(); 
        echo $cFisher->displayInfosActor();

echo "<p>=====================================</p>";
        $hanSolo = new Character("Han", "Solo");
        $princessLeia = new Character("Princess Leia");

        echo $hanSolo->displayInfosCharacter();

        $casting1 = new Casting($starWarIV, $hanSolo, $hFord);
        $casting2 = new Casting($starWarIV,  $princessLeia, $cFisher);

        echo $casting1->displayInfosCasting();

        // afficher le casting d'un film : acteurs + rôles
        echo $starWarIV->displayCasting();
        // afficher la filmographie d'un acteur : films + rôles
        echo $hFord->displayCasting();
        // afficher les acteurs ayant incarné un rôle : acteurs + films

    ?>
</body>
</html>