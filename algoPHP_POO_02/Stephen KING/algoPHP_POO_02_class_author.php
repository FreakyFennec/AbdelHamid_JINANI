<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<?php  
    class Authors {
        private string $surName;
        private string $firstName;
        private string $gender;
        private DateTime $birth;
        private array $books;

        // Constructor
        public function __construct(string $surName, string $firstName, string $gender,  string $birth) {
            $this->surName = $surName;
            $this->firstName = $firstName;
            $this->gender = $gender;
            $this->birth = new DateTime($birth);
            $this->books = [];
        }

        // Setters
        public function setSurName() {
            return $this->surName;
        }
        public function setFirsName() {
            return $this->firsName;
        }
        public function setGender() {
            return $this->gender;
        }
        public function setBirth() {
            return $this->birth;
        }
        public function setBooks() {
            return $this->books;
        }

        // Getters
        public function getSurName() {
            return $this->surName;
        }        
        public function getFirsName() {
            return $this->firsName;
        }        
        public function getGender() {
            return $this->gender;
        }        
        public function getBirth() {
            

            return $this->birth;
        }        
        public function getBooks() {
            return $this->books;
        }

        // Methode
        public function displayBooks() {
            
            return "
                <div>
                    <p>Surname : " .$this->surName. "</p>
                    <p>First name : " .$this->firstName. "</p>
                    <p>Gender : " .$this->gender. "</p>
                    <p>Date of birth : " .($this->birth). "</p>
                    <p>Books : " .$this->books. "</p>
                </div>";
            
        }
    }
?>