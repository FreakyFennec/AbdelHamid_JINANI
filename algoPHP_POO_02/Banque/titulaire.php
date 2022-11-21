
<h1>Account holder<h1>

<?php
    class titulaireCompte {

        // Propriétés
        private string $nom;
        private string $prenom;
        private string $genre;
        private DateTime $dateNaissance;
        private string $lieuResidence;
        private array $comptes;

        // Construteur
        public function __construct(string $nom, string $prenom, string $genre, string $dateNaissance, string $lieuResidence) {
            $this->nom = $nom;
            $this->firsName = $prenom;
            $this->genre = $genre;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->lieuResidence = $lieuResidence;
            $this->account = [];
        }

        // Set and get nom       
        public function getnom():string
        {
            return $this->nom;
        }       
        public function setnom($nom)
        {
            $this->nom = $nom;
            return $this;
        }

        // Set and get prenom       
        public function getprenom():string
        {
            return $this->prenom;
        }        
        public function setprenom($prenom)
        {
            $this->prenom = $prenom;
            return $this;
        }

        // Set and get genre      
        public function getgender():string
        {
            return $this->genre;
        }        
        public function set($genre)
        {
            $this->genre = $genre;
            return $this;
        }

        // Set and get dateNaissance    
        public function getdateNaissance():int
        {
            return date_diff(new DateTime(), $this->dateNaissance)->format("%Y");
        }        
        public function setdateNaissance($dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
            return $this;
        }

        // Set and get lieuResidence     
        public function getlieuResidence():string
        {
            return $this->lieuResidence;
        }
    
        public function setlieuResidence($lieuResidence)
        {
            $this->lieuResidence = $lieuResidence;
            return $this;
        }


        
    }
?>