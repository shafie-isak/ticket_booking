<?php

class BookingModel
{
    private $conn;


    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addBook($name, $phone, $type, $numOfTicket, $paymentMethod, $totalPrice)
    {
        $sql = "INSERT INTO bookings(name, phone, number_of_tickets, payment_method, ticket_type, total_price) 
                VALUES(?, ?, ?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("ssissd", $name, $phone, $numOfTicket, $paymentMethod, $type, $totalPrice);
        return $statement->execute();
    }

    public function getBookings()
    {
        $sql = "SELECT id, name, phone, ticket_type, number_of_tickets, total_price, payment_method, 
       DATE_FORMAT(created_at, '%d-%m-%Y %h:%i %p') AS created_at 
        FROM bookings;";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result = $statement->get_result();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function updateBooking($id, $name, $phone, $type, $numOfTicket, $payMethod, $totalPrice)
    {
        $sql = "UPDATE bookings SET name = ?, phone = ?, ticket_type = ?, number_of_tickets = ?, payment_method = ?, total_price = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_Param("sss", $name, $phone, $type, $numOfTicket, $payMethod, $totalPrice);
        return $statement->execute();
    }

    public function deleteBooking($id)
    {
        $sql = "DELETE FROM bookings WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        return $statement->execute();
    }

    public function getBookingByid($id)
    {
        $sql = "SELECT * FROM bookings WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        $result = $statement->get_result();
        return $result->fetch_assoc();

    }
}


?>