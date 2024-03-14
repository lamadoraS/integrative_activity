<?php
include 'migration/get-user.php';

$new = new Get();
$data =$new->getAll($_GET) ;

echo json_encode($data);

?>