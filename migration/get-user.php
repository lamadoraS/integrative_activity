<?php
include './database/db.php';

class Get extends Database 
{
    public function getAll($params)
    {
        $first_name = $params['first_name'];
        $get = $this->conn->query("SELECT * FROM users WHERE first_name = '$first_name'");
        $show = $get->fetch_all(MYSQLI_ASSOC);
        return $show;
    }

}


?>