<?php
    class Actor extends Person 
    {
        // Properties
        private array $movies;

        // Constructor
        public function __construct()
        {
        $this->movies = [];
        }
    }
?>