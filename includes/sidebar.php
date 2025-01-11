<?php
    if (isset($_POST['add_ticket'])) {
        header('Location: /addticket');
    }  
?>

<div class="sideBarContainer">
    <div class="sidebar">
        <div class="addTicketCont">
            <form method="POST">
                <button type="submit" class="addTicketBtn" name="add_ticket">+New Ticket</button>
            </form>
        </div>
        <hr>
        <nav>
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <li class="has-submenu">
                    <a href="#">Tickets</a>
                    <ol class="submenu">
                        <li><a href="/managetickets">Manage Tickets</a></li>
                        <!-- <li><a href="bookticket">Book Ticket</a></li> -->
                        <li><a href="/bookings">Bookings</a></li>
                    </ol>
                </li>
                <li><a href="/users">Users</a></li>
                <li><a href="/reports">Reports</a></li>
            </ul>
        </nav>
    </div>
    <a href="/"><button name="/" class="logoutBtn">Back Home</button></a>
</div>
