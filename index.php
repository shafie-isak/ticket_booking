<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/ticketform.css">
    <link rel="stylesheet" href="assets/css/manageusers.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/managetickets.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/ticketbooking.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <?php
        $routes = [
            "/" => "views/home.php",
            "/tickets" => "views/tickets.php",
            "/dashboard" => "views/dashbord.php",
            "/about" => "views/about.php",
            "/contact" => "views/contact.php",
            "/addticket" => "views/addnewticket.php",
            "/managetickets" => "views/managetickets.php",
            "/ticketbooking" => "views/ticketbooking.php",
            "/bookticket" => "views/adminbookticket.php",
            "/login" => "views/login.php",
            "/register" => "views/userRegistration.php",
            "/users" => "views/manageusers.php",
            "/bookings" => "views/bookings.php",
            "/logout" => "views/logout.php",
        ];


        $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
        function routeTooControllers($uri, $routes){
            if(array_key_exists($uri, $routes)){
                require $routes[$uri];
            }
            else{
                abort();
            }
        }


        function abort($code = 404){

            http_response_code($code);

            require "views/oops_404.php";

            die();
        }

        routeTooControllers($uri, $routes);
    ?>
<script src="assets/js/main.js"></script>
</body>
</html>

