<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif des produits</title>
    <link rel="stylesheet" href="assets/css/style_main.css">
    <link rel="stylesheet" href="assets/css/style_appli_table.css">
</head>
<body>
    <div id="container">
        <nav>
            <ul class="ul_navigation">
                <li><a href="index.php" class="accueil">Accueil</a></li>
                <li><a href="#" class="listeProduits">Liste des produits</a></li>
                <li><a href="#" class="recap">Récap</a></li>
                <li><a href="#" class="numRecap">1</a></li>
            </ul>
        </nav>
        <main>
        <?php
            if(isset($_GET["action"])) {             

                switch($_GET["action"]) {

                    // AJOUTER UN PRODUIT
                    case "add":

                        if(isset($_POST["submit"])) {
                            // Ici on vérifie l'intégrité des valeurs transmises dans le tableau $_POST.
                            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                            $qqt = filter_input(INPUT_POST, "qqt", FILTER_VALIDATE_INT);
                        }


                        

                        header("Location: recap.php");
                        break;

                        

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
            
            header("Location: index.php");
        ?>
        </main>
    </div>
</body>
</html>