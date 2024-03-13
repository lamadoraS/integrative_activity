<?php

class Database 
{
    public $conn;
    public function __construct()
    {
        $this->conn = new mysqli('localhost','root','');
        $create = $this->conn->query("CREATE DATABASE IF NOT EXISTS api_db");
        $use = $this->conn->query("USE api_db");
    }
}

?>