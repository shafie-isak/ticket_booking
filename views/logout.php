<?php

include 'controllers/userController.php';
include 'config/database.php';

$controller = new UserController($conn);
$controller->logOut();

?>