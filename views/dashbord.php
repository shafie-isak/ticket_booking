<?php 
    include "includes/dashbordHeader.php";
    include_once "includes/auth.php";

    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
        header('location: /');
        exit();
    }
?>

<div class="dashContainer">
    <?php 
        include "includes/sidebar.php";
        include "includes/dashboardContents.php";
    ?>
</div>
