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
echo "<p>============== disp infos person =======================</p>";
        $georgeLucas = new Director ("George", "Lucas", "Man", "1944-05-14");     // On définit une personne.

        echo $georgeLucas->displayInfosPerson();    // On affiche les infos de la personne.

echo "<p>============== disp movies =======================</p>";
        $sciFi = new Genre("Science Fiction");      // On définit le genre du film.

        // On définit les infos du film plus les instanciations de la personne et du genre.
        $movie = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        echo $georgeLucas->displayMovies();     // On affiche les infos du film.

        $aventure = new Genre("Aventure");

        $movie = new Movie("Le aveturiers de l'arche perdu", $georgeLucas, 1981, 115, $aventure, "1936. Parti à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : le Français René Belloq.
        Revenu à la vie civile à son poste de professeur universitaire d'archéologie, il est mandaté par les services secrets et par son ami Marcus Brody, conservateur du National Museum de Washington, pour mettre la main sur le Médaillon de Râ, en possession de son ancienne amante Marion Ravenwood, désormais tenancière d'un bar au Tibet. (AlloCiné).");

echo "<p>================= disp infos actor ====================</p>";
        $starWarIV = new Movie("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        $hFord = new Actor("Ford","Harrison", "Man", "1942-07-13",);
        $cFisher = new Actor("Fisher", "Carrie", "Woman", "1956-10-21");

        echo $hFord->displayInfosActor(); 
        echo $cFisher->displayInfosActor();

echo "<p>=============== disp infos character ======================</p>";
        $hanSolo = new Character("Han Solo");
        $princessLeia = new Character("Princess Leia");

        echo $hanSolo->displayInfosCharacter();
        
echo "<p>=============== disp infos casting ======================</p>";
        $casting1 = new Casting($starWarIV, $hanSolo, $hFord);
        $casting2 = new Casting($starWarIV,  $princessLeia, $cFisher);

        echo $casting1->displayInfosCasting();

echo "<p>================ disp casting movie =====================</p>";
        // afficher le casting d'un film : acteurs + rôles
        echo $starWarIV->displayCasting();

echo "<p>================= disp casting actor ====================</p>";
        // afficher la filmographie d'un acteur : films + rôles
        echo $hFord->displayCasting();

echo "<p>================== disp casting charcter ===================</p>";
        // afficher les acteurs ayant incarné un rôle : acteurs + films
        echo $hanSolo->displayCasting();

echo "<p>================== Part II with James Bond Movie =============</p>";
echo "<p>======================================================</p>";
        $tYoung = new Director("Terence", "Young", "Man", 1915-06-20);
        echo $tYoung->displayInfosPerson();

        $action = new Genre("action");

        $jBondDrNo = new Movie("James Bond 007 contre Dr No", $tYoung, 1962, 105, $action, "Lorsque deux agents britanniques disparaissent mystérieusement en Jamaïque, le chef des services secrets britanniques, « M », y envoie l'agent spécial 007 James Bond pour enquêter.");

        echo $tYoung->displayMovies();

        echo $jBondDrNo->displayInfosFilm();

        $sConnery = new Actor("Connery", "Sean", "Man", "1930-08-25");
        $uAndress = new Actor("Andress", "Ursula", "Woman", "1936-03-19");

        echo $sConnery->displayInfosActor();
        echo $uAndress->displayInfosActor();

        $jBond007 = new Character("James Bond 007");
        $honey = new Character("Honey");

        echo $jBond007->displayInfosCharacter();
        echo $honey->displayInfosCharacter();

        $casting3 = new Casting($jBondDrNo, $jBond007, $sConnery);

        echo $casting3->displayInfosCasting();

    ?>
</body>
</html>