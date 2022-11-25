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

        $georgeLucas = new Person ("George", "Lucas", "Man", "1944-05-14", "Director");     // On définit une personne.

        echo $georgeLucas->displayInfosPerson();    // On affiche les infos de la personne.

        $sciFi = new Genre("Science Fiction");      // On définit le genre du film.

        // On définit les infos du film plus les instanciations de la personne et du genre.
        $movie = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        echo $georgeLucas->displayMovies();     // On affiche les infos du film.

        $harrisonFord = new Person("Ford", "Harrison", "Man", "1942-07-13", "Actor");      // On définit une personne.

        echo $harrisonFord->displayInfosPerson();   // On affiche les infos de la personne.

        $aventure = new Genre("Aventure");

        $movie = new Movie("Le aveturiers de l'arche perdu", $harrisonFord, 1981, 115, $aventure, "1936. Parti à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : le Français René Belloq.
        Revenu à la vie civile à son poste de professeur universitaire d'archéologie, il est mandaté par les services secrets et par son ami Marcus Brody, conservateur du National Museum de Washington, pour mettre la main sur le Médaillon de Râ, en possession de son ancienne amante Marion Ravenwood, désormais tenancière d'un bar au Tibet. (AlloCiné).");

        echo $harrisonFord->displayMovies();



        $starWarIV = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        $hFord = new Actor("Ford","Harrison", "Man", "1942-07-13", "Actor");
        $cFisher = new Actor("Fisher", "Carrie", "Woman", "1956-10-21", "Actress");

        echo $hFord->displayInfosActor(); 
        echo $cFisher->displayInfosActor();

        //echo $starWarIV->displayMovie();
    ?>
</body>
</html>