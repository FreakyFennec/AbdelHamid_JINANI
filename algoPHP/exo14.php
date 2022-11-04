<!--
    exo14.php
=============================================
    By AHJ
-->

<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
function ageCalculation() {

    // variable de travail
    $currentDate = "2018-05-21";
    $birthDate = "1985-01-17";

    // calculs
    $ageInSecondes = (strtotime($currentDate) - strtotime($birthDate));

    $daysQuantities = $ageInSecondes / (60 * 60 * 24); // diviser par le nbre de secondes/jour
    $monthsQuantities = $daysQuantities / 30; // diviser par le nbre de jours/mois
    $yearsQuantities = $monthsQuantities / 12; // diviser par le nbre de mois/année

    echo "Nombre de jours $daysQuantities <br>";
    echo "Nombre de mois $monthsQuantities <br>";
    echo "Nombre d'années $yearsQuantities <br>";

    echo "Age de la personne: ". $ageInSecondes ."<br>";
    echo "Age de la personne: 33 ans 4 mois 4 jours<br>";
}
ageCalculation();
?>
