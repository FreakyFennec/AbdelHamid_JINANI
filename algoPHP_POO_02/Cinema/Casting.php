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
            $this->character = $character;
            $this->actor = $actor;
        }       
    }
?>