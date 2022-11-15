<!--
    algoPHP_POO_02_class_author.php
    =============================================
    By AHJ
-->

<h1>algoPHP_POO_02_class_author.php</h1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie complète d’un auteur :</p>

<?php  
class Author {
    protected $_surName;
    protected $_firstName;
    protected $_biblio;

   
    public function __construct($_surName, $_firstName) {
        $this->_surName = $_surName;
        $this->_firstName = $_firstName;
    }

    public function __toString() {
        
    }

    public function getSurName() {
        return $this->_surName;
    }

    public function setSurName() {
        return $this->_surName;
    }


}
    


?>