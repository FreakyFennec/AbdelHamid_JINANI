<!--
    exo15.php
=============================================
    By AHJ
-->

<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br><br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<h2>Résultat</h2>

<?php
/*
declare(strict_type = 1);
*/
class Personnes {
    public $name;
    public $nickName;
    public $birth;

    // fonction calcul age
    public function displayIdentity($name, $nickName, $birth) {
        // variable de travail
        $currentDate = new DateTime(); // date d'aujourd'hui
        // calculs
        $interval = $currentDate->diff($birth); // objet (?) contenant les années, les mois, les jours etc...

        $age = $interval->y; // extraction du nombre d'années

        echo "$nickName $name a $age <br>";
    }   
}

/**/
$p1 = new Personnes("DUPONT", "Michel", "1980-02-19");

$p2 = new Personnes("DUCHEMIN", "Alice", "1982-01-17");

/**/
var_dump($p1); echo "<br>";
var_dump($p2);
  

?>
