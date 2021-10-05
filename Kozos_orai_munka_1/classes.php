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

    }

    //Származtatott osztály 02 - reg űrlap validálásához
    class RegCheck extends Forms{

    }
?>