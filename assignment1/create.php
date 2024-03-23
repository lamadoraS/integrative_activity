<?php

header('Content-type: application/json; charset=UTF-8');

class lozares 
{
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'lozares');
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            return json_encode([
                "code" => 201,
                "message" => $_SERVER['REQUEST_METHOD']. " Method is not allowed, Only POST Method is allowed",
            ]);
        }

        $data = json_decode(file_get_contents("php://input"), true);

        $name = $data['name'];
        $email_address = $data['email_address'];
        $age = $data['age'];

        $isInserted = $this->conn->query("INSERT INTO profiles ( name, email_address, age) values ( '$name','$email_address','$age')");

        if($isInserted){
            $id = $this->conn->insert_id;
            $row = $this->conn->query("SELECT * FROM profiles where profile_id = $id");
            $response = $row->fetch_assoc();

            return json_encode($response);
        } else {
            echo json_encode([
                'message' => 'Failed to Insert Data',
                'code' => 422,
            ]);
        }
    }
}
$create = new lozares();

echo $create->create($_POST);
?>