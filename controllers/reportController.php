<?php

class ReportController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Fetch data for the report
    public function getReportData()
    {
        $sql = "SELECT * FROM bookings"; // Example: Fetch all bookings
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    // Generate PDF using FPDF
    // Generate PDF using FPDF
    public function exportPDF($data)
    {
        require '../fpdf/fpdf.php';

        ob_start(); // Start output buffering

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 12);

        // Add header
        $pdf->Cell(40, 10, 'Name', 1);
        $pdf->Cell(40, 10, 'Phone', 1);
        $pdf->Cell(50, 10, 'Ticket Type', 1);
        $pdf->Cell(30, 10, 'Price', 1);
        $pdf->Ln();

        // Add data
        foreach ($data as $row) {
            $pdf->Cell(40, 10, $row['name'], 1);
            $pdf->Cell(40, 10, $row['phone'], 1);
            $pdf->Cell(50, 10, $row['ticket_type'], 1);
            $pdf->Cell(30, 10, $row['total_price'], 1);
            $pdf->Ln();
        }

        ob_end_clean(); // Clean output buffer
        $pdf->Output('D', 'Report.pdf'); // Send PDF to download
        exit();
    }


}

