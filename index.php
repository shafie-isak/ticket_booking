<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php 
        include ("routes/about.php");
    ?>
<script src="assets/js/main.js"></script>
</body>
</html>



<!-- <?php -->

// include 'config/database.php';
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// include 'controlers/user.php';

// $action = $_GET['action'] ?? 'showRegisterForm';  

// switch ($action) {
//     case 'register_user':
//         $controller = new UserController($conn); 
//         $controller->registerUser(); 
//         break;

//     case 'showRegisterForm':
//         $controller = new UserController($conn); // Create a new UserController instance
//         $controller->showRegisterForm(); // Call the showRegisterForm method to display the registration form
//         break;

//     default:
//         echo "Welcome to the MVC Ticket System!"; // Default action if no specific action is given
//         break;
// }

// ?>