<?php
    class Movie
    {
        // Properties
        private string $title;
        private Director $director;
        private int $frenchRelease;
        private int $duration;
        private Genre $genre;
        private string $synopsis;

        // Constructor
        public function __construct(string $title, Director $director, int $frenchRelease, int $duration, Genre $genre, string $synopsis)
        {
            $this->title = $title;
            $this->director = $director;
            $this->frenchRelease = $frenchRelease;
            $this->synopsis = $synopsis;
            $this->duration = $duration;
            //$this->genre->addGenre($this);
            $this->director->addMovie($this);
        }

        // Get and Set title
        public function getTitle() {
            return $this->title;
        }
        public function setTitle() {
            return $this->title;
        }

        // Get and Set director
        public function getDirector() {
            return $this->director;
        }
        public function setDirector() {
            return $this->director;
        }

        // Get and Set frenchRelease
        public function getFrenchRelease() {
            return $this->frenchRelease;
        }
        public function setFrenchRelease() {
            return $this->frenchRelease;
        }

        // Get and Set duration
        public function getDuration() {
            return $this->duration;
        }
        public function setDuration() {
            return $this->duration;
        }

        // Get and Set genre
        public function getFilmGenre() {
            return $this->genre;
        }
        public function setFilmGenre() {
            return $this->genre;
        }

        // Get and Set synopsis
        public function getSynopsis() {
            return $this->synopsis;
        }
        public function setSynopsis() {
            return $this->synopsis;
        }

        // Method display genre
        /*public function displayGenre() {

        }*/
        
        // Method
        public function __toString() {
            return "" .$this->title. " <br>
                Date de sortie en France : " .$this->frenchRelease. "<br>
                Durée : " .$this->duration. " mn<br>               
                Résumé : " .$this->synopsis. "";
        }
    }
?>