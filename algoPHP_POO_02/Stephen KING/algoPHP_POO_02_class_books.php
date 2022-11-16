<!--
    algoPHP_POO_02_class_books.php
    =============================================
    By AHJ
-->

<?php
    class Books {
        private $_title;
        private $_publicationDate;
        private $_pagesQuant;
        private $_price;
        private Author $_author;

    
        public function __construct($_title, $_publicationDate, $_pagesQuant, $_price, Author $_author) {
            $this->_title = $_title;
            $this->_publicationDate = $_publicationDate;
            $this->_pagesQuant = $_pagesQuant;
            $this->_price = $_price;
        }

        public function setTitle() {
            return $this->_title;
        }
        public function getTitle() {
            return $this->_title;
        }
        
        public function setPublicationDate() {
            return $this->_publicationDate;
        }
        public function getPublicationDate() {
            return $this->_publicationDate;
        }
        
        public function setPagesQuant() {
            return $this->_pagesQuant;
        }    
        public function getPagesQuant() {
            return $this->_pagesQuant;
        }
        
        public function setPrince() {
            return $this->_price;
        }    
        public function getPrince() {
            return $this->_price;
        }
    

        public function __toString() {
            return "Title : " .$this->_title. "<br>
                    Publication date : " .$this->_publicationDate. "<br>
                    Pages quantities : " .$this->_pagesQuant. "<br>
                    Price : " .$this->_price. "<br>
                    Books : " .Author $_author."<br>";
        }

    }

?>