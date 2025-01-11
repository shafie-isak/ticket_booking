<?php
include('includes/header.php');
include_once 'config/database.php';
include_once 'controllers/bookingController.php';

if (!isset($_SESSION['user_id'])) {
    header('location: /login');
    exit();
}

$bookingController = new BookingController($conn);
$bookingController->addBooking();

$user_id = $_SESSION['user_id'];
$user_sql = 'SELECT * FROM users WHERE id = ?';
$statement = $conn->prepare($user_sql);
$statement->bind_param('i', $user_id);
$statement->execute();
$user_result = $statement->get_result();
$user_row = $user_result->fetch_assoc();
// Fetch ticket types from the database
$sql = "SELECT id, type , price FROM tickets";
$result = $conn->query($sql);
?>

<div class="bookingFormcontainer">
    <div class="formHeader">
        <h1>Book Ticket</h1>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Personal Information -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input class="input" type="text" id="name" name="name" value="<?php echo htmlspecialchars($user_row['name']) ?>" readonly>
        </div>
        <div class="form-group">
            <label for="phone">Telephone:</label>
            <input class="input" type="number" id="phone" name="phone" value="<?php echo htmlspecialchars($user_row['phone']) ?>" readonly>
        </div>

        <!-- Ticket Type Selection -->
        <div class="form-group">
            <label for="venue">Select Type:</label>
            <select class="input" id="venue" name="venue" >
                <option value="" disabled selected>Select Type</option> <!-- Placeholder Option -->
                <?php
                if ($result->num_rows > 0) {
                    // Populate options dynamically
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . htmlspecialchars($row['type']) . "' data-price='" . htmlspecialchars($row['price']) . "'>" . htmlspecialchars($row['type']) . "</option>";
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
            <input class="input" type="number" id="adults" name="adults" min="1" >
        </div>

        <!-- Payment Information -->
        <div class="form-group">
            <label for="payment_method">Select Payment Method:</label>
            <select class="input" id="payment_method" name="payment_method" >
                <option value="" disabled selected>Select pay.Method</option>
                <option value="Card">Card</option>
                <option value="Mobile">Mobile</option>
                <option value="cash">Cash on Arrival</option>
            </select>
        </div>

        <!-- Total Price -->
        <div class="form-group">
            <label for="total">Total Price:</label>
            <input class="input" type="text" id="total" name="total" readonly>
        </div>

       
        <button type="submit" name="submit">Submit</button>
    </form>
</div>

<script>
    // JavaScript to dynamically calculate and display the total price with a $ prefix
    document.addEventListener('DOMContentLoaded', function () {
        const venueDropdown = document.getElementById('venue');
        const ticketQuantityInput = document.getElementById('adults');
        const totalPriceInput = document.getElementById('total');

        function updateTotalPrice() {
            const selectedOption = venueDropdown.options[venueDropdown.selectedIndex];
            const ticketPrice = selectedOption.getAttribute('data-price');
            const ticketQuantity = ticketQuantityInput.value;

            if (ticketPrice && ticketQuantity) {
                const totalPrice = (ticketPrice * ticketQuantity).toFixed(2);
                totalPriceInput.value = `${totalPrice}`; // Prepend the dollar sign
            } else {
                totalPriceInput.value = ''; // Clear the input if no valid data
            }
        }

        // Attach event listeners to update the total price
        venueDropdown.addEventListener('change', updateTotalPrice);
        ticketQuantityInput.addEventListener('input', updateTotalPrice);
    });
</script>

<?php include('includes/footer.php'); ?>