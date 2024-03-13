<?php
include 'migration/get-user.php';

$new = new Get();
$data =$new->getAll() ;

echo json_encode($data);

?>