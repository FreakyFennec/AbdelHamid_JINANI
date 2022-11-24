<?php
    class Actor extends Person 
    {
        // Properties
        private string $surName;
        private string $firstName;
        private array $movies;

        // Constructor
        public function __construct(string $surName, string $firstName)
        {
            $this->surName = $surName;
            $this->firstName = $firstName;
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
    }
?>