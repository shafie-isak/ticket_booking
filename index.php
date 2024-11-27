<?php

include 'config/database.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include 'controllers/user.php';

$action = $_GET['action'] ?? 'showRegisterForm';  

switch ($action) {
    case 'register_user':
        $controller = new UserController($conn); 
        $controller->registerUser(); 
        break;

    case 'showRegisterForm':
        $controller = new UserController($conn); // Create a new UserController instance
        $controller->showRegisterForm(); // Call the showRegisterForm method to display the registration form
        break;

    default:
        echo "Welcome to the MVC Ticket System!"; // Default action if no specific action is given
        break;
}
?>