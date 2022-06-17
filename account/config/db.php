<?php
ob_start();
session_start();
class Database{
    private $con;
    public $server = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "couriers";
   
    public function connect(){
        try{
            $this->con =  new PDO("mysql:host=$this->server;dbname=$this->dbname",$this->username,$this->password);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->con;
        }catch(PDOException $e){
            return "connection failed " .$e->getMessage();
        }
       
    }
}


?>