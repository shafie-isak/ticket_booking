<?php

class BookingModel
{
    private $conn;


    function __construct($db)
    {
        $this->conn = $db;
    }

    function addBook($name, $type, $numOfTicket, $paymentMethod, $totalPrice)
    {
        $sql = "INSERT INTO bookings(name, phone, number_of_tickets, payment_method, type, total_price) 
                VALUES(?, ?, ?, ?, ?, ?)";
                $statement = $this->conn->prepare($sql);
                $statement->bind_param("ssssss");

                if ($statement->execute()) {
                    echo 'Ticket added successfully!';
                } else {
                    echo 'Error: ' . $this->conn->error;
                }
        
                // Close the statement
                $statement->close();
            }
    }


?>