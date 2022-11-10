<!--
    exo_POO_01_construct_class.php
    =============================================
    By AHJ
-->
<h1>exo_POO_01_construct_class.php</h1>

<p></p>

<?php    
    class Computer {        /** Création de la classe Computer */
        private $_brand;    /** Création des attributs en mode private */

        public function turnOn() {      /** Création de la méthode turnOn() */
            $this->_statusOnOff = 1;    /** $this permet de faire référence à l'instance de l'objet dans une méthode */
        }
    }
    $workPlace = new Computer();    /** La variable $workPlace instancie un objet de class Computer */
?>