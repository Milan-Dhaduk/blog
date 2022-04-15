<?php
    include "LoginModel.php";
    include "RegisterModel.php";
    class UserModel {

        public $login;
        public  $register;

        public function __construct()
        {
            $this->login = new LoginModel();
            $this->register = new RegisterModel();            
        }
        
        public function login()
        {
            $this->login->loginData();
        }
        public function register()
        {
            $this->register->registerData();
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