<?php

// declare(strict_type = 1);

//<!--
    //exo15.php
//=============================================
    //By AHJ
//-->

    echo "<h1>Exercice 15</h1>

    <p>Créer une classe Personne (nom, prénom et date de naissance).<br>
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br><br>
    (dollar)p1 = new Personne('DUPONT', 'Michel', '1980-02-19') ;<br>
    (dollar)p2 = new Personne('DUCHEMIN', 'Alice', '1985-01-17') ;</p>

    <h2>Résultat</h2>";

    class Personnes {
        public $name;
        public $nickName;
        public $birth;

        public function __construct($nickName , $name , $birth) {
            $this->name = $name;
            $this->nickName = $nickName;
            $this->birth = $birth;
        }

        // Calcul age
        public function displayIdentity() {
            /*
            // Variable de travail
            $currentDate = new DateTime(); // Date d'aujourd'hui
            // Calculs
            $interval = $currentDate->diff($birth); // Objet (?) contenant les années, les mois, les jours etc...

            $age = $interval->y; // Extraction du nombre d'années
    */
            echo "$this->nickName $this->name a $this->birth ans.<br>";
        }   
    }

    $p1 = new Personnes("DUPONT", "Michel", "1980-02-19"); // Instantiation (création objet $p1)

    $p2 = new Personnes("DUCHEMIN", "Alice", "1982-01-17"); // Instantiation (création objet $p2)

    $p1->displayIdentity();
    $p2->displayIdentity();

?>
