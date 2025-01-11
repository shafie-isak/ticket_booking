<?php

class ReportController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Fetch data for the report
    public function getReportData($fromDate = null, $toDate = null)
    {
        $sql = "SELECT * FROM bookings WHERE 1=1"; // Base query
        $params = [];
        $types = "";

        if (!empty($fromDate)) {
            $sql .= " AND created_at >= ?";
            $params[] = $fromDate;
            $types .= "s";
        }

        if (!empty($toDate)) {
            $sql .= " AND created_at <= ?";
            $params[] = $toDate;
            $types .= "s";
        }

        $stmt = $this->conn->prepare($sql);

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Export data as CSV
    public function exportCSV($data)
    {
        // Clean the output buffer
        if (ob_get_length()) {
            ob_end_clean();
        }

        // Set CSV headers
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=Report.csv');

        // Open output stream
        $output = fopen('php://output', 'w');

        // Add column headers
        fputcsv($output, ['Name', 'Phone', 'Ticket Type', 'Price', 'Date']);

        // Write data rows
        foreach ($data as $row) {
            fputcsv($output, [
                $row['name'],
                $row['phone'],
                $row['ticket_type'],
                $row['total_price'],
                $row['created_at']
            ]);
        }

        fclose($output); // Close output stream
        exit(); // Terminate script
    }
}
