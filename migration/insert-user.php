<?php
include 'database/db.php';

class Insert extends Database 
{
  public function insertTbl($params) 
  {
      $first_name = $params['first_name'];
      $last_name = $params['last_name'];
      $email_address = $params['email_address'];
      $password = $params['password'];

      $insert = $this->conn->query("INSERT INTO users(first_name, last_name, email_address, password)
      VALUES('$first_name','$last_name','$email_address','$password')");
      
  }
}

?>