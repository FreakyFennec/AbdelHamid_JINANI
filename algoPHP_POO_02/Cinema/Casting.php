<?php
   class Casting 
   {
        // Properties
        private Movie $movie;
        private Character $character;
        private Actor $actor;
       
        // Constructor
        public function __construct(Movie $movie, Character $character, Actor $actor) 
        {
            $this->movie = $movie;
            $this->movie->addCasting($this);
            $this->character = $character;
        
            $this->character->addCasting($this);    // ajouter casting dans Character 
            $this->actor = $actor;
            $this->actor->addCasting($this);    // ajouter casting dans Actor
        }   
                
        // Get movie
        public function getMovie() {
            return $this->movie;
        }
                
        // Get character
        public function getCharacter() {
            return $this->character;
        }
                
        // Get actor
        public function getActor() {
            return $this->actor;
        }

        public function __toString() {
            return $this->movie. " " .$this->character. " " .$this->actor;
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