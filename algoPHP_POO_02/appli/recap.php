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
                echo "<table>",
                        "<thead>",
                            "<tr>",
                                "<th>#</th>",
                                "<th>Nom</th>",
                                "<th>Prix</th>",
                                "<th>Quantité</th>",
                                "<th>Total</th>",
                                "<th>Actions</th>",
                            "</tr>",
                        "</thead>",
                        "<tbody>";


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

                
                        $totalGeneral = 0;
                        foreach($_SESSION["products"] as $index => $product) {
                            echo  "<tr>",
                                        "<td>".$index."</td>",                                                      // Index du produit.
                                        "<td>".$product["name"]."</td>",                                            // Nom du produit.
                                        "<td>".number_format($product["price"], 2, ",","&nbsp;")."</td>",           // Prix du produit.

                                        "<td class='quantArea'>
                                            <input type='image' id='imgMoins' alt='Quantitée moins' src='assets/img/icons/iconMoins.png'>" 
                                            .$product["qqt"].                                                                               // Quantité de produit.
                                            "<input type='image' id='imgPlus' alt='Quantitée plus' src='assets/img/icons/iconPlus.png'>
                                        </td>",
                                        
                                        "<td>".number_format($product["total"], 2, ",","&nbsp;")."</td>",                                   // Sous total par produit.
                                        "<td>
                                            <input type='image' id='imgCorbeille' alt='Delet' src='assets/img/icons/corbeille.png'>         
                                        </td>",
                                    "</tr>";
                            $totalGeneral += $product["total"];     // Total des produits + le sous total par prduit.
                        }
                        echo "<tr>",
                                    "<td colspan = 2>Nombre de produits : </td>",
                                    "<td colspan = 2>Total général : </td>",
                                    "<td><strong>" .number_format($product["total"], 2, ",","&nbsp;") . "&nbsp;</strong></td>",
                                "</tr>",
                                "<tr>",
                                    "<td colspan = 6><input class='boutonVidePanier' type='submit' name='submit' value='Vider le panier' onclick='viderPanier();'></td>",
                                "</tr>",
                            "</tbody>",
                        "</table>";
            }
            
            header("Location: index.php");
        ?>
        </main>
    </div>
</body>
</html>