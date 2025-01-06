<?php
session_start();

function isAuthenticated() {
    return isset($_SESSION['user_id']);
}

if (!isAuthenticated()) {
    header('Location: /login'); // Redirect to login if not authenticated
    exit();
}
?>
