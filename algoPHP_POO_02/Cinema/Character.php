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

        // Method display infos character
        public function displayInfosCharacter() {
         return "
            <p>Character : " .$this->character. "</p>";
        }

		public function __toString()
		{
			return $this->character;
		}		
        
        // ajouter un casting dans le tableau des castings
        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
        }

    }
?>