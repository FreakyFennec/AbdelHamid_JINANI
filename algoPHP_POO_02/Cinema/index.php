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

        $sciFi = new Genre("Science Fiction");

        $georgeLucas = new Director ("George", "Lucas", "Man", "1944-05-14");

        echo $georgeLucas->displayInfosDirector();

        $movie = new Movie ("Star Wars Episode IV", $georgeLucas, 1977, 121, $sciFi, "Il y a bien longtemps, dans une galaxie très lointaine... La guerre civile fait rage entre l'Empire galactique et l'Alliance rebelle. Capturée par les troupes de choc de l'Empereur menées par le sombre et impitoyable Dark Vador, la princesse Leia Organa dissimule les plans de l'Etoile Noire, une station spatiale invulnérable, à son droïde R2-D2 avec pour mission de les remettre au Jedi Obi-Wan Kenobi. (AlloCiné).");

        echo $georgeLucas->displayMovies();


        $georgeLucas = new Person ("George", "Lucas", "Man", "1944-05-14", "Director");

        echo $georgeLucas->displayInfosPerson();


        $harrisonFord = new Person ("Ford", "Harrison", "Man", "1942-07-13", "Actor");

        echo $harrisonFord->displayInfosPerson();
    ?>
</body>
</html>