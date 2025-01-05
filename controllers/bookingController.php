<?php
include_once('models/BookingModel.php');
include_once('config/database.php');

class BookingController {
    private $bookingModel;

    public function __construct($db) {
        $this->bookingModel = new BookingModel($db);
    }

    public function getAllBookings() {
        return $this->bookingModel->getBookings();
    }
}
?>
