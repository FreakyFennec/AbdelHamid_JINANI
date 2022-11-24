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

        $georgeLucas = new Director("Lucas", "George", "Man", "1944-05-14");

        echo $georgeLucas->displayInfosDirector();

        $StarWarsIV = new Movie ("Star Wars Episode IV", $georgeLucas, 1977, 121, "Science Fiction", "Synopsis");

        echo $StarWarsIV->displayMovies();
    ?>
</body>
</html>