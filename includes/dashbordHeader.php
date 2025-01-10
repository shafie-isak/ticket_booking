
<?php

include_once 'config/database.php';
include_once 'includes/auth.php';



$user_id = $_SESSION['user_id'];
$sql = 'SELECT name, email FROM users WHERE id = ?';
$statement = $conn->prepare($sql);
$statement->bind_Param('i', $user_id);
$statement->execute();
$result = $statement->get_result();
$row = $result->fetch_assoc();

?>
<div class="dashboardHeaderContainer">
    <div class="dashboardHeaderleft">
        <img src="assets/images/logo_white.png" alt="logo">
        <hr>
        <h3>Dashboard</h3>
    </div>
    <div class="dashboardHeaderRight">
        <i class="fa-solid fa-bell"></i>
        <img class="profile profile-as-btn" src="assets/images/profile1.jpeg" alt="Profile">
        <div class="dropdown-content" id="dropdownMenu">
            <div class="userInfo">
                <p><strong>Name</strong></p>
                <p><?= htmlspecialchars("Welcome, ".$row['name']) ?></p>
                <br>
                <p><strong>Email</strong></p>
                <p><?= htmlspecialchars($row['email']) ?></p>
            </div>
            <hr>
            <a href="/logout">Logout</a>
        </div>
    </div>
</div>

