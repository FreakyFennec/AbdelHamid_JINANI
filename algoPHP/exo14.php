<!--
    exo14.php
=============================================
    By AHJ
-->

<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php
// variable de travail
$currentDate = new DateTime("2018-05-21");
$birthDate = new DateTime("1985-01-17");

// calculs
$diff = $currentDate ->diff($birthDate);

echo "Age de la personne: ". $diff ."";
echo "Age de la personne: 33 ans 4 mois 4 jours";
?>