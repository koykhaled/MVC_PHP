<?php
require_once __DIR__ . '/../../config/connection.php';

class Model
{
    protected $id;

    public function setID($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}