<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <h1>POO exo banque</h1>

    <?php
        spl_autoload_register(function ($class_name) {
            include $class_name . '.php';
        });

        $martin = new Titulaire("MARTIN", "Henry", "M", "1981-08-24", "Cadix");
        $compteCourant = new Compte("Compte courant", 1527.85, "€", $martin);
        $compteEpargne = new Compte("Compte épargne", 5000, "€", $martin);

        echo $martin->afficherComptes();
    ?>
</body>
</html>