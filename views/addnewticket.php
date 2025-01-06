<?php
include "includes/dashbordHeader.php";
include_once 'controllers/ticketController.php';

$controller = new TicketController($conn);

$ticket = '';

if (isset($_GET['id'])) {
    $ticket = $controller->getTicket($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $controller->updateTicket();
    }
}
$controller->addTicket();
?>

<div class="dashContainer">
    <?php
    include("includes/sidebar.php");
    ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
            <div class="contentHeader">
                <h2>Add New Ticket</h2>
                <a href="/managetickets" class="anchor-as--btn">Available Tickets</a>
            </div>
            <hr>
            <div class="ticket-booking-form">
                <h2>Add New Ticket Form</h2>
                <form action="/addticket" method="POST" enctype="multipart/form-data">

                    <?php if ($ticket): ?>
                        <input type="hidden" name="id" value="<?php echo $ticket['id']; ?>">
                    <?php endif; ?>

                    <div class="input-group-booking">
                        <label for="name">Ticket Type</label>
                        <input class="input-field" type="text" id="ticket-type" name="type" value="<?php echo $ticket['type'] ?? ''; ?>" required>
                    </div>


                    <div class="form-group-booking">
                        <label for="ticket-price">Price:</label>
                        <input type="number" class="input-field" id="ticket-price" name="price" value="<?php echo $ticket['price'] ?? ''; ?>" required>
                    </div>

                    <div class="form-group-booking">
                        <label for="ticket-attachment">Attachment (Image/Document):</label>
                        <input type="file" class="input-field" id="ticket-attachment" name="picture"
                            accept="image/*,application/pdf" onchange="previewImage(event)" />
                    </div>


                    <div class="form-group-booking des-textarea">
                        <label for="ticket-price">Description:</label>
                        <textarea class="input-field" id="ticket-description" name="description" required><?php echo $ticket['description'] ?? ''; ?></textarea>
                           </textarea>
                    </div>

                    <div id="image-preview-container">
                        <h3>Preview:</h3>
                        <img id="image-preview" src="" alt="Image preview"
                            style="max-width: 300px; max-height: 300px; border: 1px solid #ddd; padding: 5px;">
                    </div>



                    <button type="submit"><?php echo $ticket ? 'Update Ticket' : 'Add Ticket'; ?></button>
                </form>
            </div>
        </div>
    </div>