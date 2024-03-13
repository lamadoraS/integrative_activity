<?php
include 'database/db.php';

class Get extends Database 
{
    public function getAll()
    {
        $get = $this->conn->query("SELECT * FROM users WHERE first_name = 'nunu'");
        $show = $get->fetch_all(MYSQLI_ASSOC);
        return $show;
    }

}


?>