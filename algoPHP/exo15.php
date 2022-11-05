<!--
    exo14.php
=============================================
    By AHJ
-->

<h1>Exercice 14</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br><br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php

declare(strict_type = 1);

class Personnes {
    public $name;
    public $nickName;
    public $birth;

    public function ageCalculation() {
    // variable de travail
        $currentDate = new DateTime(); // date d'aujourd'hui
        $birth = new DateTime("1980-02-19"); // date de naissance
        // calculs
        $interval = $currentDate->diff($birth); // objet (?) contenant les années, les mois, les jours etc...

        $age = $interval->y; // extraction du nombre d'années

        return $age;
    }
    public $age;
}
/*
$p1 = new Personnes("DUPONT", "Michel", "1980-02-19");
*/
$p1 = new Personnes();
$p1->name = "DUPONT";
$p1->nickName = "Michel";
$p1->birth = "1980-02-19";

/**/
echo "$p1->nickName $p1->name a $p1->birth ans <br>";

/*
$p2 = new Personnes("DUCHEMIN", "Alice", "1982-01-17");

var_dump($p1);
var_dump($p2);
  */



?>
