<?php
    class Comptes 
    {
        private string $nomCompte;
        private string $soldeInitial;
        private string $devise;
        private string $titulaireCompte;
    
        // Constructeur
        public function __construct(string $nomCompte, int $soldeInitial, string $devise, string $titulaireCompte) 
        {        
            $this->nomCompte = $nomCompte;
            $this->soldeInitial = $soldeInitial;
            $this->devise = $devise;
            $this->titulaireCompte = $titulaireCompte;
            $this->titulaireCompte->ajouterCompte($this);
        }

        // Set and get nomCompte
        public function getnomCompte():string
        {
            return $this->nomCompte;
        }       
        public function setnomCompte($nomCompte)
        {
            $this->nomCompte = $nomCompte;
            return $this;
        }

        // Set and get soldeInitial
        public function getsoldeInitial():string
        {
            return $this->soldeInitial;
        }       
        public function setsoldeInitial($soldeInitial)
        {
            $this->soldeInitial = $soldeInitial;
            return $this;
        }

        // Set and get devise
        public function getdevise():string
        {
            return $this->devise;
        }       
        public function setdevise($devise)
        {
            $this->devise = $devise;
            return $this;
        }

        // Set and get titulaireCompte
        public function gettitulaireCompte():string
        {
            return $this->titulaireCompte;
        }       
        public function settitulaireCompte($titulaireCompte)
        {
            $this->titulaireCompte = $titulaireCompte;
            return $this;
        }

        public function __toString() {
            return "Compte : " .$this->nomCompte. "<br> Solde initial : " .$this->soldeInitial. "<br> Devise : ".$this->devise. " <br> Tutulaire du compte : .$this->titulaireCompte.";
        }
    }
?>