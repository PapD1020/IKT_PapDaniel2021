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
            else if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $this->userNameError = "Nem tartalmazhat ékezetes betűket";
            }
            else{
                $this->userNameError = "";
            }

            $lenght = strlen($pw);
            if(empty($pw)){
                $this->passwordError = "Nem lehet üres";
            }
            else if(strlen($pw) < 8){
                $remaining = $lenght - 8;
                $remaining = $remaining * -1;
                $this->passwordError = "8 és 16 karakterhusszú legyen a jelszó! Még $remaining karakter hiányzik. Jelszó hossz: $lenght";
            }
            else if(strlen($pw) > 16){
                $remaining2 = $lenght - 16;
                $this->passwordError = "8 és 16 karakterhusszú legyen a jelszó! Töröljön ki $remaining2 karaktert. Jelszó hossz: $lenght";
            }
            else{
                $this->password = $pw;
                $this->passwordError = "";
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
        protected $userEmail;
        protected $fullName;

        function __construct($name, $pw, $email, $fn){
            $this->userName = $name;
            $this->password = md5($pw);
            $this->userEmail = $email;
            $this->fullName = $fn;

            /*$sql = "INSERT INTO `users` (`Uname`, `Email`, `Pass`, `Name`, `Active`, `Rank`, `Ban`, `Reg_Time`, `Login_Time`) VALUES
            ('".$this->getUserName()."', '".$this->getUserEmail()."', '".$this->getPassword()."', '".$this->getFullName()."',0, 0, 0,'".date('Y-m-d-H-i')."', '0')";*/
            $sql = "INSERT INTO `users` (`Uname`, `Email`, `Pass`, `Name`, `Active`, `Rank`, `Ban`, `Reg_Time`, `Login_Time`) VALUES
            ('Pap', '".$this->getUserEmail()."', '".$this->getPassword()."', '".$this->getFullName()."',0, 0, 0,'".date('Y-m-d-H-i')."', '0')";

            $c = new Connection();
            if(mysqli_query($c->getConn(), $sql)){
                echo "Új rekord feltöltése sikeres volt";
            }
            else{
                echo "Error " .$sql. "<br>" . mysqli_error($c->getConn());
            }

            mysqli_close($c->getConn());
            header('location: index.php');
        }
    }

    class Connection{
        private $servername;
        private $username;
        private $pw;
        private $db;
        private $conn;

        public function getConn(){
            return $this->conn;
        }

        function __construct(){
            $this->servername = "localhost";
            $this->username = "root";
            $this->pw = "";
            $this->db = "gyak1";
            $this->conn = msqli_connect($this->servername, $this->username, $this->password, $this->db);

            if($this->conn->connect_error){
                die("Connection failed: " . $this->conn->connect_error);
            }
        }

        /**
         * Get the value of userEmail
         */ 
        public function getUserEmail()
        {
                return $this->userEmail;
        }

        /**
         * Set the value of userEmail
         *
         * @return  self
         */ 
        public function setUserEmail($userEmail)
        {
                $this->userEmail = $userEmail;

                return $this;
        }

        /**
         * Get the value of fullName
         */ 
        public function getFullName()
        {
                return $this->fullName;
        }

        /**
         * Set the value of fullName
         *
         * @return  self
         */ 
        public function setFullName($fullName)
        {
                $this->fullName = $fullName;

                return $this;
        }
    }
?>