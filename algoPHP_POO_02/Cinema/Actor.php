<?php
    class Actor extends Person 
    {
        // Properties
        private array $movies;
        private array $castings;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender, string $birth)
        {
            parent::__construct($surName, $firstName, $gender, $birth);
            $this->movies = [];
            $this->castings = [];
        }

        // method display infos actor
        public function displayInfosActor() {
            return "
                <div>
                    <p>Surname : " . $this->surName . "</p>
                    <p>First name : " . $this->firstName . "</p>
                </div>";
        }
        
        // ajouter un casting dans le tableau des castings
        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
        }

        // Method display casting
        public function displayCasting() {
            $result = "Les rôles de $this<br>";
            foreach($this->castings as $casting) {
                $result .= $casting->getActor(). " a joué dans " .$casting->getMovie()." comme " .$casting->getCharacter(). "<br>";
            }
            return $result;
        }
        
        // Method display infos casting
        public function displayInfosCasting() {
            return "
                <p>" .$this->movie."</p>
                <p>" .$this->character."</p>
                <p>" .$this->actor."</p>";
        }
    }
?>