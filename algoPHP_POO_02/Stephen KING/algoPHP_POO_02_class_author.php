<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<h1>The author</h1>


<?php  
    class Authors {
        protected $_surName;
        protected $_firstName;

    
        public function __construct($_surName, $_firstName) {
            $this->_surName = $_surName;
            $this->_firstName = $_firstName;
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
        
        
        public function __toString() {
            return "<div>
                        <p>Surname : " .$this->_surName. ">/p>
                        <p>First name : " .$this->_firstName. ">/p>
                    </div>";
        }
    }

    $author = new Authors("Stephen", "KING");
    var_dump($author);  
    echo $author;

?>