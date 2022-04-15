<?php
    class LoginModel extends Database
    {
        public $conn;

        public function __construct()
        {
            $this->conn = new Database();    
        }

        public function loginData()
        {
            $sql = "";
        }
    }


?>