<?php
    class Character
    {
        // Properties
        private string $character;
        
        // Constructor
        public function __construct(string $character)
        {
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
    }
?>