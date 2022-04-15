<?php
    class Database
     {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;
        public $conn;
    

    public function __construct()
    {
        try
        {
                 return $this->conn=new PDO("mysql:host=" .$this->dbHost. ";dbname=" .$this->dbName,
                $this->dbUser,$this->dbPass);
               

        }
        catch(PDOException $e)
        {
            echo "database connection error" .$e->getMessage();

        }
        

    }
}