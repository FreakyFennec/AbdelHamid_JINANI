<?php
    session_start();

    if(isset($_POST["submit"])) {   // Vérifie si la clé submit du tableau $_POST correspond au name de l'input "submit".
        // Ici on vérifie l'intégrité des valeurs transmises dans le tableau $_POST.
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);
    }

    header("Location:index.php");   // Autrement retourne à la page index de toutes


?>