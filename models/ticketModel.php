<?php

class TicketModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addTicket($type, $price, $description, $imageContent, $imagetype)
    {
        $sql = "INSERT INTO tickets(type, price, description, image, image_type) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("sdsss", $type, $price, $description, $imageContent, $imagetype);


        return $statement->execute();
    }

    
    public function getTickets() {
        $sql = "SELECT * FROM tickets";
        $statement = $this->conn->prepare($sql);
        $statement->execute();

        $result = $statement->get_result();
        $data = [];

        while ($row = $result->fetch_assoc()){
            // $id = $row['id'];

            $data[] =  $row;
        }
        return $data;
        
    }

    public function updateTicket($id, $type, $price, $description) {
        $sql = "UPDATE tickets SET type = ?, price = ?, description = ? WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("sdsi", $type, $price, $description, $id);
        return $statement->execute();
    }

    public function deleteTicket($ticket_id) {
        $sql = "DELETE FROM tickets WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $ticket_id);
        return $statement->execute();
        
    }

    public function getTicketById($id) {
        $sql = "SELECT * FROM tickets WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_assoc();

    }

}



?>