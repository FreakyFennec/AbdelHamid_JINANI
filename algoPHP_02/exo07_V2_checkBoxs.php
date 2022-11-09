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
        "1" => "0",
        "2" => "1",
        "3" => "0"
    ];
    //$displayInput($namesInput);

    echo "<form><fieldset><div>";
            
    function checkboxGenerator($elements) {
        foreach($elements as $choice => $value) {
            if ($value === 1) {
                $value = "checked";
            }
            var_dump($value);
            echo "<input type=\"checkbox\" id=\"choice$choice\" name=\"choice$choice\" \"$value\">
                <label for=\"choix$choice\">Choix $choice</label><br>";
        }
    }
    checkboxGenerator($elements);

    echo "</div></fieldset></form>";

?>