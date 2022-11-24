<?php
    class Person 
    {
        // Properties
        private string $surName;
        private string $firstName;
        private string $gender;
        private DateTime $birth;
        private array $movies;
        private string $contribution;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender,  string $birth, string $contribution) {
            $this->surName = $surName;
            $this->firstName = $firstName;
            $this->gender = $gender;
            $this->birth = new DateTime($birth);
            $this->movies = [];
            $this->contribution = $contribution;
        }

        // Get and Set surName
        public function getSurName() {
            return $this->surName;
        }
        public function setSurName($surName) {
            $this->surName = $surName;
            return $this;
        }
        
        // Get and Set firstName
        public function getFirstName() {
            return $this->firstName;
        }
        public function setFirstName($firstName) {
            $this->firstName;
            return $this;
        }

        // Get and Set gender
        public function getGender() {
            return $this->gender;
        }
        public function setGender($gender) {
            $this->gender;
            return $this;
        }
        
        // Get and Set birth
        public function getBirth():DateTime {
            return $this->birth;
        }
        public function setBirth($birth) {
            $this->birth;
            return $this;
        }

        // Get and Set movies
        public function getMovies() {
            return $this->movies;
        }
        public function setMovies($movies) {
            $this->movies;
            return $this;
        }

        // Get and Set contribution
        public function getcontribution() {
           return $this->contribution;
        }
         public function setcontribution($contribution) {
           $this->contribution = $contribution;
           return $this;
        }

        // Method display age
        public function getAge() {
            return date_diff(new DateTime(), $this->birth)->format("%Y"); // différence(dateActuelle, dateNaissance)->formatée(années).
        }

        // Method add movies
        public function addMovie(Movie $movie) {
            $this->movies[] = $movie;
        }

        // Method add genre
        public function addGenre(Genre $genre) {
            $this->$genre;
            return $this;
        }

         // method display infos director
         public function displayInfosPerson() {
            return "
                <div>
                    <p>Surname : " . $this->surName . "</p>
                    <p>First name : " . $this->firstName . "</p>
                    <p>Age : " . $this->getAge() . " ans.</p>
                    <p>Contribution : " . $this->contribution . "</p>
                </div>";
        }

    }
?>