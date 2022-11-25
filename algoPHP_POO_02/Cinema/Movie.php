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
        private array $castings;

        // Constructor
        public function __construct(string $title, Director $director, int $frenchRelease, int $duration, Genre $genre, string $synopsis)
        {
            $this->title = $title;
            $this->director = $director;
            $this->frenchRelease = $frenchRelease;
            $this->synopsis = $synopsis;
            $this->duration = $duration;
            $this->genre = $genre;
            $this->director->addMovie($this);
            $this->castings = [];
        }

        // Get and Set title
        public function getTitle() {
            return $this->title;
        }
        public function setTitle($title) {
            $this->title = $title;
        }

        // Get and Set director
        public function getdirector() {
            return $this->director;
        }
        public function setdirector() {
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
        public function setFilmGenre($genre) {
            $this->genre = $genre;
        }

        // Get and Set synopsis
        public function getSynopsis() {
            return $this->synopsis;
        }
        public function setSynopsis() {
            return $this->synopsis;
        }

        // ajouter un casting dans le tableau des castings
        public function addCasting(Casting $casting){
            $this->castings[] = $casting;
        }

        public function displayCasting() {
            $result = "Casting de $this<br>";
            foreach($this->castings as $casting){
                $result .= $casting->getActor()." a joué ".$casting->getCharacter()."<br>";
            }
            return $result;
        }

        public function displayInfosFilm() {
            return "" .$this->title. " <br>
                Date de sortie en France : " .$this->frenchRelease. "<br>
                Durée : " .$this->duration. " mn<br>               
                Résumé : " .$this->synopsis. "";
        }
        // Method
        public function __toString() {
            return $this->title;
        }        
    }
?>