<?php
    class Actor extends Person {
        // Properties
        private array $movies;

        // Constructor
        public function __construct()
        {
        $this->movies = [];
        }

        // Method display movies
        public function displayMovies() {
            $result = "Movie of : $this<br><ul>";
            foreach($this->movies as $movie) {      // Boucle sur array movies
                $result .= "<li>$movie</li>";
            }
            $result .= "<ul>";
            return $result;    
        }
    }
?>