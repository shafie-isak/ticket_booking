<?php
include "models/userModel.php";
include_once 'config/database.php';


class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new UserModel($db);
    }



    public function registerUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $name = $_POST['name'] ?? null;
            $email = $_POST['email'] ?? null;
            $phone = $_POST['phone'] ?? null;
            $password = $_POST['password'] ?? null;

            if (empty($name) || empty($email) || empty($phone) || empty($password)) {
                echo "All fields are required.";
                return;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Invalid email format.";
                return;
            }

            $password = password_hash($password, PASSWORD_BCRYPT);




            if ($this->userModel->registerUser($name, $email, $phone, $password)) {
                // Redirect to login page or display success message
                header('location: /login');
            } else {
                echo "Error: Could not register user.";
            }
        }
    }

    public function login()
    {
        // session_start();

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
            $username = $_POST["loginName"] ?? '';
            $password = $_POST["loginpass"] ?? '';

            if (!empty($username) && !empty($password)) {
                $user = $this->userModel->getUser($username);

                if ($user && password_verify($password, $user['password'])) {

                    $_SESSION["user_id"] = $user['id'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['name'] = $user['name'];

                    if ($_SESSION['role'] === 'admin') {
                        header('location: /dashboard');

                    } else {
                        header('location: /tickets');
                    }

                    exit();

                } else {
                    return "Inavalid username or password";
                }

            } else {
                return "Fill the blanks";
            }

        }
        return null;
    }

    public function getUsers()
    {
        return $this->userModel->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userModel->getUserById($id);
    }

    public function deleteUser($id)
    {
        $this->userModel->deleteUser($id);
    }

    public function logOut()
    {
        session_start();
        session_unset();
        session_destroy();
        header('location: /login');
        exit();

    }

}




?>