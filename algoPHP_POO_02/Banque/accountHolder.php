<?php
    class AccountHolder {

        // Propriétés
        private string $surName;
        private string $firstName;
        private string $gender;
        private DateTime $birth;
        private string $cityHome;
        private array $accounts;

        // Construteur
        public function __construct(string $surName, string $firstName, string $gender, string $birth, string $cityHome) {
            $this->surName = $surName;
            $this->firsName = $firstName;
            $this->gender = $gender;
            $this->birth = new DateTime($birth);
            $this->cityHome = $cityHome;
            $this->account = [];
        }

        // Set and get surName       
        public function getsurName():string
        {
            return $this->surName;
        }
        
        public function setsurName($surName)
        {
            $this->surName = $surName;
            return $this;
        }

        // Set and get firstName       
        public function getfirstName():string
        {
            return $this->firstName;
        }
        
        public function setfirstName($firstName)
        {
            $this->firstName = $firstName;
            return $this;
        }

        // Set and get        
        public function get(firstName):string
        {
            return $this->firstName;
        }
        
        public function setfirstName($firstName)
        {
            $this->firstName = $firstName;
            return $this;
        }

        // Set and get        
        public function get():DateTime
        {
            return $this->;
        }
        
        public function set($)
        {
            $this-> = $;
            return $this;
        }
        // Set and get        
        public function get():string
        {
            return $this->;
        }
        
        public function set($)
        {
            $this-> = $;
            return $this;
        }
        // Set and get        
        public function get():string
        {
            return $this->;
        }
        
        public function set($)
        {
            $this-> = $;
            return $this;
        }
        // Set and get        
        public function get():string
        {
            return $this->;
        }
        
        public function set($)
        {
            $this-> = $;
            return $this;
        }
        
    }
?>