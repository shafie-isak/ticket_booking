<?php

class ReportModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getReport($reportType, $dateFrom, $dateTo) {
        $query = "";
        $params = [];
        $types = "";

        // Define query based on report type
        if ($reportType === 'users') {
            $query = "SELECT id, name, email, role FROM users";
        } elseif ($reportType === 'tickets') {
            $query = "SELECT type, description, price, (SELECT COUNT(*) FROM bookings WHERE bookings.ticket_type = tickets.type) AS sold FROM tickets";
        } elseif ($reportType === 'bookings') {
            $query = "SELECT id, name, ticket_type, number_of_tickets, total_price, created_at FROM bookings WHERE 1=1";

            if (!empty($dateFrom)) {
                $query .= " AND created_at >= ?";
                $params[] = $dateFrom;
                $types .= "s";
            }

            if (!empty($dateTo)) {
                $query .= " AND created_at <= ?";
                $params[] = $dateTo;
                $types .= "s";
            }
        }

        $statement = $this->conn->prepare($query);

        if (!empty($params)) {
            $statement->bind_param($types, ...$params);
        }

        $statement->execute();
        $result = $statement->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
