<?php
    class Director extends Person 
    {
        // Properties
        private array $movies;

        // Constructor
        public function __construct() {
            $this->movies = [];
        }

        // Method add movies
        public function addMovie(Movie $movie) {
            $this->movies[] = $movie;
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