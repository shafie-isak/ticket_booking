<?php
  include('includes/header.php');  
?>

<div class="bookingFormcontainer">
        <div class="formHeader">
            <h1>Ticket Booking Form</h1>
        </div>
        <form action="submit_booking.php" method="POST">
            <!-- Personal Information -->
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input class="input" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input class="input" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number (Optional):</label>
                <input class="input" type="text" id="phone" name="phone">
            </div>
            <!-- Venue Selection -->
            <div class="form-group">
                <label for="venue">Select Venue:</label>
                <select class="input" id="venue" name="venue" required>
                    <option value="zoo">Zoo</option>
                    <option value="swimming_pool">Swimming Pool</option>
                </select>
            </div>
            <!-- Date and Time -->
            <div class="form-group">
                <label for="date">Date of Visit:</label>
                <input class="input" type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time of Visit:</label>
                <input class="input" type="time" id="time" name="time" required>
            </div>
            <!-- Ticket Quantity -->
            <div class="form-group">
                <label for="adults">Number of tickets</label>
                <input class="input" type="number" id="adults" name="adults" min="0" required>
            </div>
            <!-- Payment Information -->
            <div class="form-group">
                <label for="payment_method">Select Payment Method:</label>
                <select class="input" id="payment_method" name="payment_method" required>
                    <option value="credit_card">Credit Card</option>
                    <option value="debit_card">Debit Card</option>
                    <option value="paypal">Online Payment (PayPal)</option>
                    <option value="cash">Cash on Arrival</option>
                </select>
            </div>
            <!-- Terms and Conditions -->
            <div class="terms">
                <label>
                    <input type="checkbox" name="terms" required>
                    I have read and agree to the terms and conditions.
                </label>
            </div>
            <!-- Submit Button -->
            <button type="submit">Submit Booking</button>
        </form>
    </div>

<?php
  include('includes/footer.php');  
?>