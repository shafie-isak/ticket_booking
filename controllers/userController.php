<?php
include "models/userModel.php";

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new UserModel($db);
    }

 

    public function registerUser() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];


            if ($this->userModel->registerUser($name, $email, $phone, $password)) {
                // Redirect to login page or display success message
                echo "User registered successfully!";
            } else {
                echo "Error: Could not register user.";
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once ('config/database.php');
    $controller = new UserController($conn);
    $controller->registerUser();
}


?>