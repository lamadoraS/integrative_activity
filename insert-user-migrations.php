<?php
include 'migration/insert-user.php';

$new = new Insert();
$new->insertTbl($_POST);

?>