<?php
include_once('models/ticketModel.php');
include_once('config/database.php');

class TicketController
{
    private $ticketModel;

    public function __construct($db)
    {
        $this->ticketModel = new TicketModel($db);
    }

    public function addTicket()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $type = $_POST['type'] ?? '';
            $price = $_POST['price'] ?? '';
            $description = $_POST['description'] ?? '';
            $imagePath = null;

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
                $imageType = $_FILES['picture']['type'];
                $allowedTypes = ['image/png', 'image/jpeg'];

                if (in_array($imageType, $allowedTypes)) {
                    $uploadDir = 'uploads/';
                    $fileName = basename($_FILES['picture']['name']);
                    $filePath = $uploadDir . uniqid() . '-' . $fileName;

                    if (move_uploaded_file($_FILES['picture']['tmp_name'], $filePath)) {
                        // Save to the database
                        $imagePath = $filePath;
                    } else {
                        echo "Failed to upload the image.";
                        return;
                    }
                } else {
                    echo "Invalid file type. Only PNG and JPEG are allowed.";
                    return;
                }
            }

            try {
                $this->ticketModel->addTicket($type, $price, $description, $imagePath, $imageType);
                echo "<script>alert('Ticket added successfully!');</script>";
                header('location: /managetickets');
                exit();
            } catch (mysqli_sql_exception $e) {
                // Check if the error is caused by a duplicate entry
                if ($e->getCode() === 1062) { // Error code 1062 means duplicate entry
                    echo "<script>alert('A ticket with this type already exists. Please use a unique type.');</script>";
                } else {
                    echo "<script>alert('An unexpected error occurred: " . $e->getMessage() . "');</script>";
                }
            }
        }
    }

    public function updateTicket()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST['id'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            // Handle file upload
            $imagePath = null;
            if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
                $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg'];
                $imageType = $_FILES['picture']['type'];

                if (in_array($imageType, $allowedTypes)) {
                    $tmpPath = $_FILES['picture']['tmp_name'];
                    $fileName = uniqid() . '_' . $_FILES['picture']['name'];
                    $destination = 'uploads/' . $fileName;

                    if (move_uploaded_file($tmpPath, $destination)) {
                        $imagePath = $destination; // Set the image path for database update
                    } else {
                        echo "Failed to upload the file.";
                        return;
                    }
                } else {
                    echo "Invalid file type. Only PNG, JPG, and JPEG are allowed.";
                    return;
                }
            }

            // Update the ticket
            $this->ticketModel->updateTicket($id, $type, $price, $description, $imagePath);
            echo "Ticket updated successfully!";
            header('location: /managetickets');
            exit();
        }
    }

    public function getTicket($id)
    {
        return $this->ticketModel->getTicketById($id);
    }

    public function getAllTickets()
    {
        return $this->ticketModel->getTickets();
    }

    public function deleteTicket($id)
    {
        $this->ticketModel->deleteTicket(ticket_id: $id);
    }


}


?>