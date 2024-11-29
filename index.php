<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <?php
        session_start();
        $requestUri = $_SERVER['REQUEST_URI'];

        switch ($requestUri) {
            case '/':
                include ("views/home.php");
                break;
            case '/tickets':
                include ("views/tickets.php");
                break;
            case '/about':
                include ("views/about.php");
                break;
            case '/contact':
                include ("views/contact.php");
                break;  

            case '/login':
                include ("views/login.php");
                break;
            case '/register':
                include ("views/userRegistration.php");
                break;
            default:
                include ("views/oops_404.php");
                break;
        }
    ?>
<script src="assets/js/main.js"></script>
</body>
</html>

