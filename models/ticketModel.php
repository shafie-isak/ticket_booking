<?php

class TicketModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addTicket($type, $price, $description, $imageContent,  $imagetype) {
        $sql = "INSERT INTO tickets(type, price, description, picture, imagetype) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("sdsss", $type, $price, $description, $imageContent, $imagetype);
        

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