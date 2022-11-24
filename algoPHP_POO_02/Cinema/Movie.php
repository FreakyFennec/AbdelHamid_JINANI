<?php
    class Movie
    {
        // Properties
        private string $title;
        private Person $person;
        private int $frenchRelease;
        private int $duration;
        private Genre $genre;
        private string $synopsis;

        // Constructor
        public function __construct(string $title, Person $person, int $frenchRelease, int $duration, Genre $genre, string $synopsis)
        {
            $this->title = $title;
            $this->person = $person;
            $this->frenchRelease = $frenchRelease;
            $this->synopsis = $synopsis;
            $this->duration = $duration;
            $this->person->addMovie($this);
        }

        // Get and Set title
        public function getTitle() {
            return $this->title;
        }
        public function setTitle() {
            return $this->title;
        }

        // Get and Set person
        public function getperson() {
            return $this->person;
        }
        public function setperson() {
            return $this->person;
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