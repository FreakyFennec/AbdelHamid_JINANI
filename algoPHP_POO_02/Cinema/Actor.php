<?php
    class Actor extends Person 
    {
        // Properties
        private array $movies;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender, string $birth)
        {
            parent::__construct($surName, $firstName, $gender, $birth);
            $this->movies = [];
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
    }
?>