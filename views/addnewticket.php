<?php 
    include("includes/dashbordHeader.php");
?>

<div class="dashContainer">
    <?php 
        include("includes/sidebar.php");
    ?>
    <div class="dashFormContainer">
        <div class="ticket-form-container">
            <h1>Add New Ticket</h1>
            <form action="#" method="POST" class="ticket-form" enctype="multipart/form-data">
                <label for="ticket-type">Ticket Type:</label>
                <select id="ticket-type" name="ticket-type" required>
                    <option value="zoo">Zoo</option>
                    <option value="swimming-pool">Swimming Pool</option>
                </select>

                <label for="ticket-date">Date:</label>
                <input type="date" id="ticket-date" name="ticket-date" required>

                <label for="ticket-quantity">Quantity:</label>
                <input type="number" id="ticket-quantity" name="ticket-quantity" min="1" required>

                <label for="ticket-price">Price:</label>
                <input type="number" id="ticket-price" name="ticket-price" required>

                <!-- File input for image or attachment -->
                <label for="ticket-attachment">Attachment (Image/Document):</label>
                <input type="file" id="ticket-attachment" name="ticket-attachment" accept="image/*,application/pdf" onchange="previewImage(event)" />

                <!-- Image preview area -->
                <div id="image-preview-container" style="display:none; margin-top: 20px;">
                    <h3>Preview:</h3>
                    <img id="image-preview" src="" alt="Image preview" style="max-width: 300px; max-height: 300px; border: 1px solid #ddd; padding: 5px;">
                </div>

                <button type="submit">Add Ticket</button>
            </form>
        </div>
    </div>
</div>
