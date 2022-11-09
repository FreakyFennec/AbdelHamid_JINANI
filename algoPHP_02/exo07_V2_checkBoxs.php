<?php

//<!--
    //exo07_V2_checkBoxs.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 06_V2_dropdownList</h1>

    <p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
    dans le tableau associatif si la case est cochée ou non.</p>";
    
    // variables de travail
    $elements = [
        "choice_01" => "Choix 1",
        "choice_02" => "Choix 2",
        "choice_03" => "Choix 3"
    ];
    //$displayInput($namesInput);

    echo "<form><fieldset><div>";
            
    function checkboxGenerator($elements) {
        foreach($elements as $choice_01 => $value) {

            echo "<input type=\"checkbox\" id=\"$choice_01\" name=\"$choice_01\" checked>
                <label for=\"$choice_01\">$value</label><br>";
        }
    }
    checkboxGenerator($elements);

    echo "</div></fieldset></form>";

?>