<?php
include "config/database.php";

// Fetch Total Tickets
$ticketCountQuery = "SELECT COUNT(*) AS total_tickets FROM tickets";
$ticketResult = $conn->query($ticketCountQuery);
$totalTickets = $ticketResult->fetch_assoc()['total_tickets'];

// fetch total sold
$soldTickets = "SELECT COUNT(*) AS total_booking FROM bookings";
$soldResult = $conn->query($soldTickets);
$totalSoldTickets = $soldResult->fetch_assoc()['total_booking'];

// Fetch Total Users
$userCountQuery = "SELECT COUNT(*) AS total_users FROM users";
$userResult = $conn->query($userCountQuery);
$totalUsers = $userResult->fetch_assoc()['total_users'];
?>


<div class="dashcardscont">
    <div class="dashCard dashCard-1">
        <div class="iconCont">
            <i class="fa-solid fa-ticket"></i>
        </div>
        <div class="dashCardText">
            <p>Total Tickets</p>
            <h1>+<?php echo $totalTickets; ?></h1>
        </div>
    </div>
    <div class="dashCard dashCard-2">
        <div class="iconCont">
            <i class="fa-solid fa-check-double"></i>
        </div>
        <div class="dashCardText">
            <p>Available Tickets</p>
            <h1>+1023</h1> 
        </div>
    </div>
    <div class="dashCard dashCard-3">
        <div class="iconCont">
            <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="dashCardText">
            <p>Sold Tickets</p>
            <h1>+<?php echo $totalSoldTickets ?></h1> <!-- Static for now -->
        </div>
    </div>
    <div class="dashCard dashCard-4">
        <div class="iconCont">
            <i class="fa-solid fa-user"></i>
        </div>
        <div class="dashCardText">
            <p>Total Users</p>
            <h1>+<?php echo $totalUsers; ?></h1>
        </div>
    </div>
</div>
