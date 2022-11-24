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
    }
?>