<?php
ob_start(); // Start output buffering

include "includes/dashbordHeader.php";
include "config/database.php";
include "controllers/reportController.php";

$reportController = new ReportController($conn);

if (isset($_POST['export_pdf'])) {
    $data = $reportController->getReportData();
    $reportController->exportPDF($data);
    exit();
}

$data = $reportController->getReportData();
?>

<div class="dashContainer">
    <?php include("includes/sidebar.php"); ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
            <div class="contentHeader">
                <h2>Reports</h2>
                <form method="POST">
                    <button type="submit" name="export_pdf" class="anchor-as--btn">Export PDF</button>
                </form>
            </div>
            <div class="tables-container">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Ticket Type</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($data)): ?>
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                                    <td><?php echo htmlspecialchars($row['ticket_type']); ?></td>
                                    <td><?php echo htmlspecialchars($row['total_price']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No records found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>