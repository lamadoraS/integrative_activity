<?php
include 'migration/user-table.php';

$new = new User();
$new->createTbl();

?>