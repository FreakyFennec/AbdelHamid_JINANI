<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<?php  
    class Authors {
        private $_surName;
        private $_firstName;
        private $_gender;
        private $_birth;
        private array $_books;

    
        public function __construct($_surName, $_firstName, $_gender, $_birth, $_books) {
            $this->_surName = $_surName;
            $this->_firstName = $_firstName;
            $this->_gender = $_gender;
            $this->_birth = $_birth;
            $this->_books = [];
        }


        public function setSurName() {
            return $this->_surName;
        }
        public function getSurName() {
            return $this->_surName;
        }
        
        public function setFirsName() {
            return $this->_firsName;
        }
        public function getFirsName() {
            return $this->_firsName;
        }
        
        public function setGender() {
            return $this->_gender;
        }
        public function getGender() {
            return $this->_gender;
        }
        
        public function setBirth() {
            return $this->_birth;
        }
        public function getBirth() {
            return $this->_birth;
        }
        
        public function setBooks() {
            return $this->_books;
        }
        public function getBooks() {
            return $this->_books;
        }
        
        public function __toString() {
            return "<div>
                        <p>Surname : " .$this->_surName. "</p>
                        <p>First name : " .$this->_firstName. "</p>
                        <p>Gender : " .$this->_gender. "</p>
                        <p>Date of birth : " .$this->_birth. "</p>
                        <p>Books : " .$this->_books. "</p>
                    </div>";
        }
    }


?>