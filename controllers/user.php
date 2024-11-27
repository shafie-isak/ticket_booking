<?php
include_once "models/user.php";

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new UserModel($db);
    }

    public function showRegisterForm() {
        include 'views/user.php';
    }
    public function showHome() {
        include 'views/home.php';
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


?>