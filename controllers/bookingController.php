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
            $name = $_POST['name'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $type = $_POST['venue'] ?? '';
            $numOfTickets = $_POST['adults'] ?? '';
            $payMethod = $_POST['payment_method'] ?? '';
            $totalPrice = $_POST['total'] ?? '';

            $errors = [];

            if (empty($name) ) {
                $errors[] = "Name is required.";
            }

            if (empty($phone)) {
                $errors[] = "Phone number is required.";
            }

            if (empty($type)) {
                $errors[] = "Ticket type is required.";
            }

            if (empty($numOfTickets) || !is_numeric($numOfTickets) || $numOfTickets < 1) {
                $errors[] = "A valid number of tickets is required.";
            }

            if (empty($payMethod)) {
                $errors[] = "Payment method is required.";
            }

            if (empty($totalPrice) || !is_numeric($totalPrice) || $totalPrice <= 0) {
                $errors[] = "Total price must be greater than 0.";
            }

            if (!empty($errors)) {
                echo "<script>alert('All fields required');</script>";
                return ;
            }

            $this->bookingModel->addBook($name, $phone, $type, $numOfTickets, $payMethod, $totalPrice);

            echo "<script>alert('Booking successful!'); window.location.href='/tickets';</script>";
            exit();
        }
    }

    public function getAllBookings()
    {
        return $this->bookingModel->getBookings();
    }

    public function updateBooking()
    {
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

    public function deleteBooking($id)
    {
        $this->bookingModel->deleteBooking($id);
    }
}
?>
