<?php
    session_start();

    if(isset($_POST["submit"])) {   // Vérifie si la clé submit du tableau $_POST correspond au name de l'input "submit".
        // Ici on vérifie l'intégrité des valeurs transmises dans le tableau $_POST.
        $name = filter_input(INPUT_POST, "name", FILTER_UNSAFE_RAW);   // FILTER_SANITIZE_STRING is deprecated (c'était censé supprimer tous caractères spéciaux et balises html, éviter l'injection de code).
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);

        // Vérifie si tous les filtres ont fonctionnés.
        if($name && $price && $qqt) {
            $product = [
                "name" => $name,
                "price" => $price,
                "qqt" => $qqt,
                "total" => $price * $qqt
            ];

            $_SESSION["produts"][] = $product;
        }
    }

    header("Location:index.php");   // Autrement retourne à la page index de toutes


?>