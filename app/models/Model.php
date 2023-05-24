<?php

namespace app\Mo;

require __DIR__ . "/../../config/connection.php";

use app\database\Connection;
use Exception;
use PDO;

class Model
{
    protected $id;
    protected $connect;
    public function __construct()
    {
        $db = new Connection();
        $this->connect = $db->getConnection();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public  function getAll($table_name)
    {
        try {
            $select = "SELECT * from $table_name";
            $query = $this->connect->prepare($select);
            $query->execute();
            $results = array();
            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                $results[] = $row;
            }

            return $results;
        } catch (Exception $e) {
            echo "error while fetch users" . $e->getMessage();
        }
    }
}
