<?php

include 'database/db.php';

class User extends Database
{
    public function createTbl(){
        $table = $this->conn->query("CREATE TABLE IF NOT EXISTS users(
            id int auto_increment primary key,
            first_name varchar(200),
            last_name varchar(200),
            email_address varchar(200),
            password varchar(50)
        )");
    }
}

?>