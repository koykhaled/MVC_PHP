<?php
namespace app\database;

use PDO;
use PDOException;

class Connection{
    public $db_params;
   public function __construct(){
        $this->db_params=require_once(__DIR__."/database.php");
    }

public function getConnection(){
    try {
        $conn = new PDO("mysql:host=$this->db_params['host'];dbname=$this->db_params['database'])", $this->db_params['username'], $this->db_params['password']);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
      }
    return $conn;
}
}