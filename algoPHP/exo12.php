<!--
    exo11.php
=============================================
    By AHJ
-->

<h1>Exercice 11</h1>

<p></p>

<h2>Résultat</h2>

<?php
// calcul 
/**/
function sayHello() {

    // variables de travail
    $arrayStagiaires = [
        "Mickaël" => "FR", 
        "Virgile" => "ESP",
        "Marie-Claire" => "ENG"
    ];
    
    // boucle foreach pour afficher le bonjour au stagiaires
    foreach ($arrayStagiaires as $nickName => $nationality) {
       if ($nationality == "FR") {
            $hello = "Salut";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ESP") {
            $hello = "Hola";
            echo "$hello  $nickName<br>";
        } else if ($nationality == "ENG") {
            $hello = "Hello";
            echo "$hello  $nickName<br>";
        }
    }

}
/**/
sayHello();
?>