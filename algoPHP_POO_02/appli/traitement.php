<?php
    session_start();
?>

<?php

    if(isset($_GET["action"])) {             

        switch($_GET["action"]) {

            // AJOUTER UN PRODUIT
            case "add":

                if(isset($_POST["submit"])) {   // Vérifie si la clé submit du tableau $_POST correspond au name de l'input "submit".

                    // On vérifie l'intégrité des valeurs transmises dans le tableau $_POST.
                    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);   // FILTER_SANITIZE_STRING is deprecated (c'était censé supprimer tous caractères spéciaux et balises html, éviter l'injection de code).
                    $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                    $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);

                    // Vérifie si tous les filtres ont fonctionnés.
                    if(isset($_GET["action"])) {
                        $product = [
                            $action = $_GET["action"],
                            $name = $_GET["name"],
                            $price = $_GET["price"],
                            $qqt = $_GET["qqt"],
                            $total = $price * $qqt
                        ];
                        
                        
                    }
                        array_push($_SESSION["products"] = $product);
                }

            // SUPPRIMER UN PRODUIT
            case "delet":

                //array_ 
                header("Location: recap.php");
                break;
                
            // VIDER LE PANIER
            case "clear":

                // Vider l'array de produit en session
                unset($_SESSION["products"]);
                header("Location: recap.php");
                die();                                  // Termine le script courant comme exit().
                break;

            // AUGMENTER LA QUANTITE
            case "up-qtt":

            // DIMINUER LA QUANTITE
            case "down-qtt":

            // AFFICHER LE DETAIL
            case "detail":
        }
        
    }
    header("Location:recap.php");   // Autrement retourne à la page index de toutes
?>