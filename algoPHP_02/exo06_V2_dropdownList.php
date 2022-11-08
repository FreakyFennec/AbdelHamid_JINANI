<?php

//<!--
    //exo06_V2_dropdownList.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 06_V2_dropdownList</h1>

    <p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>";
    
    // variables de travail
    $elements = array("Nom", "Prénom", "Ville");
    //$displayInput($namesInput);

    echo "<form>";
            
    function populateDropDownList($elements) {
        foreach($elements as $elements) {

            echo "
                <label for=\"#\">$elements</label><br>
                <input type=\"text\" id=\"#\" name=\"#\" required
                minlength=\"4\" maxlength=\"18\" size=\"10\"></input><br>";
        }
    }
    buisnessCard($elements);

    echo "</form>";

?>