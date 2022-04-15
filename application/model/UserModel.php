<?php
    include "LoginModel.php";
    class UserModel {

        public $login;

        public function __construct()
        {
            $this->login = new LoginModel();            
        }
        public function login()
        {
            $this->login->loginData();
        }
        
        public function myData()
        {
            echo "My databases from model";
        }

        public function getById($id)
        {
            
        }
    }

?>