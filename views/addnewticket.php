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
            <h2>Add New Ticket</h2>
            <a href="/managetickets" class="anchor-as--btn">Available Tikets</a>
        </div>
        <hr>
        <div class="ticket-booking-form">
            <h2>Add New Ticket Form</h2>
            <form action="submit_booking.php" method="POST">
                <div class="input-group-booking">
                    <label for="name">Ticket Type</label>
                    <input class="input-field" type="text" id="ticket-type" name="ticket-type" required>
                </div>
              
                <div class="form-group-booking">
                    <label for="ticket-quantity">Quantity:</label>
                    <input type="number" class="input-field" id="ticket-quantity" name="ticket-quantity" min="1" required>
                </div>

                <div class="form-group-booking">
                    <label for="ticket-price">Price:</label>
                    <input type="number" class="input-field" id="ticket-price" name="ticket-price" required>
                </div>

                 <!-- Payment Information -->
                 <!-- <div class="form-group-booking">
                    <label for="payment_method">Select Payment Method:</label>
                    <select class="input-field" id="payment_method" name="payment_method" required>
                        <option value="credit_card">Credit Card</option>
                        <option value="debit_card">Debit Card</option>
                        <option value="paypal">Online Payment (PayPal)</option>
                        <option value="cash">Cash on Arrival</option>
                    </select>
                </div> -->

                <div class="form-group-booking">
                    <label for="ticket-attachment">Attachment (Image/Document):</label>
                    <input type="file" class="input-field" id="ticket-attachment" name="ticket-attachment" accept="image/*,application/pdf" onchange="previewImage(event)" />
                </div>

               
                <div class="form-group-booking des-textarea">
                    <label for="ticket-price">Description:</label>
                    <textarea type="text" class="input-field" id="ticket-price" name="ticket-price" required> </textarea>
                </div>

                <div id="image-preview-container" >
                    <h3>Preview:</h3>
                    <img id="image-preview" src="" alt="Image preview" style="max-width: 300px; max-height: 300px; border: 1px solid #ddd; padding: 5px;">
                </div>

              
               
                <button type="submit">Add Ticket</button>
            </form>
        </div>

    </div>
</div>