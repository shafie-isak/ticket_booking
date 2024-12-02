<?php 
    include("includes/dashbordHeader.php");
?>

<div class="dashContainer">
    <?php 
        include("includes/sidebar.php");
    ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
        <div class="contentHeader">
            <h2>Booking Form</h2>
            <a href="/managetickets" class="anchor-as--btn">Available Tikets</a>
        </div>
        <hr>
        <div class="ticket-booking-form">
            <h2>Book Ticket For Customer</h2>
            <form action="submit_booking.php" method="POST">
                <!-- Personal Information -->
                <div class="input-group-booking">
                    <label for="name">Full Name:</label>
                    <input class="input-field" type="text" id="name" name="name" required>
                </div>
                <div class="form-group-booking">
                    <label for="email">Email Address:</label>
                    <input class="input-field" type="email" id="email" name="email" required>
                </div>
                <div class="form-group-booking">
                    <label for="phone">Phone Number (Optional):</label>
                    <input class="input-field" type="text" id="phone" name="phone">
                </div>
                <!-- Venue Selection -->
                <div class="form-group-booking">
                    <label for="venue">Select Venue:</label>
                    <select class="input-field" id="venue" name="venue" required>
                        <option value="zoo">Zoo</option>
                        <option value="swimming_pool">Swimming Pool</option>
                    </select>
                </div>
                <!-- Date and Time -->
                <div class="form-group-booking">
                    <label for="date">Date of Visit:</label>
                    <input class="input-field" type="date" id="date" name="date" required>
                </div>
                <div class="form-group-booking">
                    <label for="time">Time of Visit:</label>
                    <input class="input-field" type="time" id="time" name="time" required>
                </div>
                <!-- Ticket Quantity -->
                <div class="form-group-booking">
                    <label for="adults">Number of tickets</label>
                    <input class="input-field" type="number" id="adults" name="adults" min="0" required>
                </div>
                <!-- Payment Information -->
                <div class="form-group-booking">
                    <label for="payment_method">Select Payment Method:</label>
                    <select class="input-field" id="payment_method" name="payment_method" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="paypal">Online Payment (PayPal)</option>
                        <option value="cash">Cash on Arrival</option>
                    </select>
                </div>
                <button type="submit">Submit Booking</button>
            </form>
        </div>

    </div>
</div>