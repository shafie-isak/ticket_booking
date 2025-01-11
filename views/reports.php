<?php
include "includes/dashbordHeader.php";
include "config/database.php";
include "controllers/reportController.php";

$reportController = new ReportController($conn);

// Fetch form inputs
$fromDate = isset($_POST['from_date']) ? $_POST['from_date'] : null;
$toDate = isset($_POST['to_date']) ? $_POST['to_date'] : null;

// Handle CSV export
if (isset($_POST['export_csv'])) {
    $data = $reportController->getReportData($fromDate, $toDate); // Pass criteria
    $reportController->exportCSV($data); // Export as CSV
    exit();
}

// Fetch report data with optional filters
$data = $reportController->getReportData($fromDate, $toDate);
?>

<div class="dashContainer">
    <?php include("includes/sidebar.php"); ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
            <div class="contentHeader">
                <h2>Reports</h2>
                <form method="POST">
                    <div>
                        <label for="from_date">From Date:</label>
                        <input type="date" name="from_date" id="from_date" value="<?php echo htmlspecialchars($fromDate); ?>">
                    </div>
                    <div>
                        <label for="to_date">To Date:</label>
                        <input type="date" name="to_date" id="to_date" value="<?php echo htmlspecialchars($toDate); ?>">
                    </div>
                    <div>
                        <button type="submit" name="filter" class="anchor-as--btn">Filter</button>
                        <button type="submit" name="export_csv" class="anchor-as--btn">Export CSV</button>
                    </div>
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
                            <th>Date</th>
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
                                    <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No records found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
