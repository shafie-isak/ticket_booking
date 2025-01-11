<?php

class TicketModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addTicket($type, $price, $description, $imagePath, $imageType)
    {
        $sql = "INSERT INTO tickets (type, price, description, image_path, image_type) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("sdsss", $type, $price, $description, $imagePath, $imageType);

        return $statement->execute();
    }


    public function getTickets($search = '', $filter = '', $sort = 'ASC')
{
    $sql = "SELECT * FROM tickets WHERE 1=1";

    if (!empty($search)) {
        $sql .= " AND (type LIKE ? OR description LIKE ?)";
    }

    // Add filter condition
    if (!empty($filter)) {
        $sql .= " AND type = ?";
    }

    $sql .= " ORDER BY type $sort";

    $statement = $this->conn->prepare($sql);

    if (!empty($search) && !empty($filter)) {
        $likeSearch = "%$search%";
        $statement->bind_param('sss', $likeSearch, $likeSearch, $filter);
    } elseif (!empty($search)) {
        $likeSearch = "%$search%";
        $statement->bind_param('ss', $likeSearch, $likeSearch);
    } elseif (!empty($filter)) {
        $statement->bind_param('s', $filter);
    }

    $statement->execute();
    $result = $statement->get_result();
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}

public function getUniqueTicketTypes()
{
    $sql = "SELECT DISTINCT type FROM tickets";
    $statement = $this->conn->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();
    return $result->fetch_all(MYSQLI_ASSOC);
    
}    public function updateTicket($id, $type, $price, $description, $imagePath)
    {
        $sql = "UPDATE tickets SET type = ?, price = ?, description = ?";
        $params = ["sds", $type, $price, $description];

        if ($imagePath) {
            $sql .= ", image_path = ?";
            $params[0] .= "s";
            $params[] = $imagePath;
        }

        $sql .= " WHERE id = ?";
        $params[0] .= "i"; // Add "i" for the ID
        $params[] = $id;

        $statement = $this->conn->prepare($sql);
        $statement->bind_param(...$params);
        return $statement->execute();
    }

    public function deleteTicket($ticket_id)
    {
        $sql = "DELETE FROM tickets WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $ticket_id);
        return $statement->execute();

    }

    public function getTicketById($id)
    {
        $sql = "SELECT * FROM tickets WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_assoc();

    }

}



?>