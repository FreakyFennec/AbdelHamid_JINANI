<!--
   exo_V2_14_POO_heritage.php
    =============================================
    By AHJ
-->
    <h1>exo_V2_14_POO_heritage.php</h1>

    <p></p>

<?php    
    class Voiture {
        private $_brand;
        private $_model;
        private $_doorQuantity;
        private $_speed;
        private $_start;

        public function __construct($brand, $model, $doorQuantity) {
            $this->_brand = $brand;
            $this->_model = $model;
            $this->_doorQuantity = $doorQuantity;
            $this->_speed = 0;
            $this->_start = false;
        }

        public function start() {
            $this->_start = true;
            echo "Le véhicule $this->_brand $this->_model démarre<br>";
        }

        public function stop() {
            $this->_start = false;
            $this->_speed = 0;
            echo "Le véhicule $this->_brand $this->_model s'arrête<br>";
        }
        
        public function accelerate($speed) {
            if($this->_start) { // Si la voiture est démarrée.
                $this->_speed += $speed; // $this->_speed = $this->_speed + $speed; on icrémente de la vitesse demandée.
                echo "Le véhicule $this->_brand $this->_model accélère de $speed km/h<br>";
            } else {
                echo "Pour accélerer, il faut démarrer<br>";
                echo "Le véhicule $this->_brand $this->_model veut accélerer de $speed km/h<br>";
            }
        }
        
        public function getBrand() {
            return $this->_brand;
        }

        public function getModel() {
            return $this->_model;
        }
        public function getDoorQuantity() {
            return $this->_doorQuantity;
        }
        public function getSpeed() {
            return $this->_speed;
        }
        public function getStart() {
            return $this->_start;
        }


        public function setBrand($brand) {
           $this->_brand = $brand;
        }
        public function setModel($model) {
            $this->_model = $model;
        }
        public function setDoorQuantity($doorQuantity) {
            $this->_doorQuantity = $doorQuantity;
        }
        public function setSpeed($speed) {
            $this->_speed = $speed;
        }
        public function setStart($start) {
            $this->_start = $start;
        }


        public function afficherEtat() {
            $resultat = "stoppé";
            if($this->_start) {
                $resultat = "démarré";
            } 
            return $resultat;
        }

        public function displaySpeed() {
            if($this->_speed >= 0) {
                echo "La vitesse du véhicule " .$this->_brand. " " .$this->_model. " est de : " .$this->_speed. "<br><br>";
            }
        }

        public function toSlowDown($speed) {
            if($this->_speed > 0) {
                if($this->_speed - $speed > 0) {
                    $this->_speed = $this->_speed - $speed;
                    return $this->_speed;
                } else {
                    echo "Vous allez casser le moteur.";
                }
            }
        }


        public function displayInfoCar() {
            echo "Infos véhicule 1 <br>
                **********************<br>
                Nom et modèle du véhicule : $this->_brand $this->_model<br>
                Nombre de portes : $this->_doorQuantity<br>
                Le véhicule $this->_brand est ". $this->afficherEtat() ."<br>
                Sa vitesse actuelle est de : ". $this->getSpeed()." km/h<br><br>";
        }
    }
    
    $V1 = new Voiture("Peugeot", "408", 5);
    
    $V2 = new Voiture("Citroën", "C4", 3);
    
    $V1->start();
    $V1->accelerate(50);
    $V2->start();
    $V2->stop();
    $V2->accelerate(20);
    $V1->displaySpeed();
    $V2->displaySpeed();

    $V1->toSlowDown(30);
    $V2->toSlowDown(10);


    $V1->displayInfoCar();
    $V2->displayInfoCar();
?>