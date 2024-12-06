<?php
include_once ('models/ticketModel.php');
include_once ('config/database.php');

class TicketController {
    private $ticketModel;

    public function __construct($db) {
        $this->ticketModel = new TicketModel($db);
    }

    public function addTicket() {
        if ($_SERVER['REQUEST_METHOD']=== 'POST') {
            $type = $_POST['type'];
            $price = $_POST['price'];
            $description = $_POST['description'];

            if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {

                $imageType = $_FILES['picture']['type'];
                $allowedTpye = ['image/png', 'image/jpg', 'image/jpeg'];

                if (in_array($imageType, $allowedTpye)) {

                    $tmpPath = $_FILES['picture']['tmp_name'];
                    $imageContent = file_get_contents($tmpPath);
                }
                else {
                    echo "Invalid image type";
                }

                $this->ticketModel->addTicket($type, $price, $description, $imageContent, $imageType); 
            } else {
                echo "Something went wrong.";
            }
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller = new TicketController($conn);
    $controller->addTicket();
};

?>