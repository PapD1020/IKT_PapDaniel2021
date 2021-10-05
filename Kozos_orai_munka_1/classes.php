<?php
    //Ősosztály létrehozása - inheritance
    class Forms{
        protected $userName;
        protected $password;
        protected $userNameError;
        protected $passwordError;

        /*
        protected $email;
        protected $fullName;
        */
    }

    //Származtatott osztály 01 létrehozása - login űrlap validálása
    class LoginCheck extends Forms{
        function __construct($name, $pw){
            $this->userName = $name;
            $this->password = $pw;

            if(empty($name)){
                $this->userNameError = "Nem lehet üres";
            }

            if(empty($pw)){
                $this->passwordError = "Nem lehet üres";
            }
        }
        /**
         * Get the value of userName
         */ 
        public function getUserName()
        {
                return $this->userName;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Get the value of userNameError
         */ 
        public function getUserNameError()
        {
                return $this->userNameError;
        }

        /**
         * Get the value of passwordError
         */ 
        public function getPasswordError()
        {
                return $this->passwordError;
        }

    }

    //Származtatott osztály 02 - reg űrlap validálásához
    class RegCheck extends Forms{

    }
?>