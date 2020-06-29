<?php
    class Db {
        private $dsn = "mysql:host=localhost;dbname=gestionallocation";
        private $user ="root";
        private $pass = "";
        public $conn;

        public function __construct(){
            try{
                $this->conn = new PDO ($this->dsn, $this->user, $this->pass);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>