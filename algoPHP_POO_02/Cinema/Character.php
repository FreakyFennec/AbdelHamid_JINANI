<?php
    class Character 
    {
        // Properties       
        private string $character;
        private array $castings;
        
        // Constructor
        public function __construct(string $character)
        {
            $this->character = $character;
            $this->castings = [];
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

        // Method display casting
        public function displayCasting() {
            $result = "Les acteurs ayant joué $this<br>";
            foreach($this->castings as $casting) {
                $result .= $casting->getActor(). " dans " .$casting->getMovie(). "<br>";
            }
            return $result;
        }

    }
?>