<?php
    class Character extends Person
    {
        // Properties
        private string $surName;
        private string $firstName;
        private string $character;
        
        // Constructor
        public function __construct(string $surName, string $firstName, string $character)
        {
           $this->surName = $surName;
           $this->firstName = $firstName;
           $this->character = $character;
        }

        // Get and Set role of character
        public function getCharacter() {
           return $this->character;
        }
         public function setCharacter($character) {
           $this->character = $character;
           return $this;
        }

        // Method display infos character
        public function displayInfosCharacter() {
         return "
            <div>
            <p>Surname : " . $this->surName . "</p>
            <p>First name : " . $this->firstName . "</p>
            <p>Profession : " . $this->character . "</p>
            </div>";
        }
    }
?>