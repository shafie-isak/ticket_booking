<?php
include('includes/header.php');  
include_once 'config/database.php'; // Include database connection

// Fetch ticket types from the database
$sql = "SELECT id, type FROM tickets";
$result = $conn->query($sql);
?>

<div class="bookingFormcontainer">
    <div class="formHeader">
        <h1>Book Ticket</h1>
    </div>
    <form action="submit_booking.php" method="POST">
        <!-- Personal Information -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="input" type="text" id="name" name="name" required>
        </div>

        <!-- Ticket Type Selection -->
        <div class="form-group">
            <label for="venue">Select Type:</label>
            <select class="input" id="venue" name="venue" required>
                <option value="" disabled selected>Select Type</option> <!-- Placeholder Option -->
                <?php
                if ($result->num_rows > 0) {
                    // Populate options dynamically
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['type']) . "</option>";
                    }
                } else {
                    echo "<option value='' disabled>No tickets available</option>";
                }
                ?>
            </select>
        </div>

        <!-- Ticket Quantity -->
        <div class="form-group">
            <label for="adults">Number of tickets:</label>
            <input class="input" type="number" id="adults" name="adults" min="1" required>
        </div>

        <!-- Payment Information -->
        <div class="form-group">
            <label for="payment_method">Select Payment Method:</label>
            <select class="input" id="payment_method" name="payment_method" required>
                <option value="credit_card">Card</option>
                <option value="paypal">Mobile Payment</option>
                <option value="cash">Cash on Arrival</option>
            </select>
        </div>

        <!-- Total Price -->
        <div class="form-group">
            <label for="total">Total Price:</label>
            <input class="input" type="number" id="total" name="total" min="0" required>
        </div>

        <!-- Terms and Conditions -->
        <!-- <div class="terms">
            <label>
                <input type="checkbox" name="terms" required>
                I have read and agree to the terms and conditions.
            </label>
        </div> -->

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</div>

<?php include('includes/footer.php'); ?>
