<!--
    exo10.php
=============================================
    By AHJ
-->

<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

<h2>Résultat</h2>

<?php
// variables de travail
$montantAPayer = 152;
$montantVersé = 200;


// calcul du reste à payer
$resteAPayer = $montantVersé - $montantAPayer;

$resteDizaine = $resteAPayer % 100;
echo "$resteDizaine <br>"; // 48

$resteUnitaire = $resteAPayer % 10;
echo "$resteUnitaire <br>"; // 8

$restBilletsCinq = $resteUnitaire / 5;
echo "$restBilletsCinq <br>"; // 1.6



$nbreBilletsDix = round(($resteDizaine / 10), 0) -1;
    echo "Nbr billets de 10 : $nbreBilletsDix<br>";

$nbreBilletsCinq = round(($restBilletsCinq / 5), 0);
    echo "Nbr billets de 5 : $nbreBilletsDix<br>";


$nbrePiecesDeDeux = round(($resteUnitaire / 2), 0);
    echo "Nbr pièces de 2 : $nbrePiecesDeDeux<br>";   



echo "Montant à payer : $montantAPayer <br>
    Montant versé : $montantVersé  <br>
    Reste à payer : $resteAPayer <br>
    *********************************** <br>
    Rendu de monnaie :  <br>";


?>