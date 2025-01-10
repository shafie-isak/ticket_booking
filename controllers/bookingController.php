<?php
include_once('models/BookingModel.php');
include_once('config/database.php');

class BookingController
{
    private $bookingModel;

    public function __construct($db)
    {
        $this->bookingModel = new BookingModel($db);
    }

    public function addBooking()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $type = $_POST['venue'];
            $numOfTickets = $_POST['adults'];
            $payMethod = $_POST['payment_method'];
            $totalPrice = $_POST['total'];

            if (empty($name) || empty($phone) || empty($type) || empty($numOfTickets) || empty($payMethod) || empty($totalPrice)) {
                echo "All fields are required";
                return;
            }

            $this->bookingModel->addBook($name, $phone, $type, $numOfTickets, $payMethod,  $totalPrice);

            header('localtion: /ticketbooking');
            exit();
        }
    }

    public function getAllBookings()
    {
        return $this->bookingModel->getBookings();
    }

    public function updateBooking() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $ticketType = $_POST['ticket_type'];
            $numOfTickets = $_POST['number_of_tickets'];
            $paymentMethod = $_POST['payment_method'];
            $totalPrice = $_POST['total_price'];
        
            $this->bookingModel->updateBooking($id, $name, $phone, $ticketType, $numOfTickets, $paymentMethod, $totalPrice);
            header('Location: /bookings');
            exit();
        }
    }

    public function deleteBooking($id) {
        $this->bookingModel->deleteBooking($id);
    }
}
?>