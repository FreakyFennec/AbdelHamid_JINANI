<!--
    algoPHP_POO_02_class_bibliography.php
    =============================================
    By AHJ
-->

<h1>algoPHP_POO_02_class_bibliography.php</h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</p>

<?php
    class Books {
        protected $_title;
        protected $_publicationDate;
        protected $_pagesQuant;
        protected $_price;

    
        public function __construct($_title, $_publicationDate, $_pagesQuant, $_price) {
            $this->_title = $_title;
            $this->_publicationDate = $_publicationDate;
            $this->_pagesQuant = $_pagesQuant;
            $this->__price = $__price;
        }

        public function getTitle() {
            return $this->_title;
        }
        public function setTitle() {
            return $this->_title;
        }
        
        public function getPublicationDate() {
            return $this->_publicationDate;
        }
        public function setPublicationDate() {
            return $this->_publicationDate;
        }
            
        public function getPagesQuant() {
            return $this->_pagesQuant;
        }
        public function setPagesQuant() {
            return $this->_pagesQuant;
        }
            
        public function getPrince() {
            return $this->_prince;
        }
        public function setPrince() {
            return $this->_prince;
        }
    

        public function __toString() {
            return "Title : " .$this->_title. "<br>
                    Publication date : " .$this->_publicationDate. "<br>
                    Pages quantities : " .$this->_pagesQuantities. "<br>
                    Price : " .$this->_price. "<br>";
        }

    }
?>