<?php

    class Pays
    {
        private string $pays;
        private array $joueurs;
        private array $equipes;

        public function __construct(string $pays)
        {
            $this->pays = $pays;
            $this->joueurs = [];
            $this->equipes = [];
        }

        // Get and Set Pays
        public function getPays()
        {
            return $this->pays;
        }

        // Get and Set Pays
        public function setPays($pays)
        {
            $this->pays = $pays;

            return $this;
        }

        public function __toString()
        {
            return $this->pays;
        }
    }
?>