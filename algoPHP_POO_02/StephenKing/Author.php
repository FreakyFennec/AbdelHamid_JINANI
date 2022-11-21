<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<?php  
    class Author {
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

        // Getters and Setters

        /** Get value of surName */
        public function getSurName():string {
            return $this->surName;
        }
     
        public function setSurName($surName) {
            $this->surName = $surName;
            return $this;
        }

        /** Get value of firsName */
        public function getFirsName():string {
            return $this->firsName;
        }

        public function setFirsName($firsName) {
            $this->firsName = $firstName;
            return $this;
        }

        /** Get value of gender */
        public function getGender():string {
            return $this->gender;
        }


        public function setGender() {
            $this->gender = $gender;
            return $this;
        }

        /** Get the value of birth */
        public function getBirth():DateTime {            
            return $this->$birth;
        } 

        /** Set the value of birth
         * @return self
         */
        public function setBirth($birth) {
            $this->birth = $birth;
            return $this;
        }

        public function getBooks() {
            return $this->books;
        }
        public function setBooks() {
            return $this->books;
        }

        /** Methode display birth */
        public function getAge() {
            return date_diff(new DateTime(), $this->birth)->format("%Y");
        }
        
        /** Methode display books */
        public function displayBooks() {
            $result = "Book of $this<br><ul>";
            foreach($this->books as $book) {
                $result .= "<li>$book</li>";
            }
            $result .= "<ul>";
            return $result;
        }  
        
        public function __toString() {
            return $this->firstName." ".$this->surName;
        }

        public function afficherInfos() {           
            return "
                <div>
                    <p>Surname : " .$this->surName. "</p>
                    <p>First name : " .$this->firstName. "</p>
                    <p>Date of birth : " .$this->getAge(). " ans.</p>
                </div>";
        }       
    }
?>