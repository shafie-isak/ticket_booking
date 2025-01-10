<?php
include "includes/dashbordHeader.php";
include "models/ticketModel.php";
include "config/database.php";
include "controllers/ticketController.php";

$ticketController = new TicketController($conn);
$ticketModel = new TicketModel($conn);

// Handle search, filter, and sort inputs
$search = isset($_GET['search']) ? $_GET['search'] : '';
$filter = isset($_GET['filter']) ? $_GET['filter'] : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'ASC';

// Fetch tickets based on search, filter, and sort
$tickets = $ticketModel->getTickets($search, $filter, $sort);

if (isset($_GET["delete"])) {
    $ticketController->deleteTicket($_GET["delete"]);
    header("location: /managetickets");
    exit();
}
?>

<div class="dashContainer">
    <?php include("includes/sidebar.php"); ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
            <div class="contentHeader">
                <h2>Ticket List</h2>
                <a href="/addticket" class="anchor-as--btn">+New Ticket</a>
            </div>
            <div class="filterCont">
                <!-- Filter and search form -->
                <form method="GET" action="/managetickets">
                    <label for="search-event" class="sr-only">Search an event</label>
                    <div class="search-input-container">
                        <input id="search-event" type="text" name="search" placeholder="Search an event" value="<?php echo htmlspecialchars($search); ?>">
                        <button type="submit" class="fa-solid fa-magnifying-glass icon_color"></button>
                    </div>

                    <div class="filtering">
                        <label for="filter-by" class="sr-only">Filter by</label>
                        <select id="filter-by" name="filter">
                            <option value="" <?php echo empty($filter) ? 'selected' : ''; ?>>All Types</option>
                            <?php
                            // Fetch unique ticket types for filtering
                            $ticketTypes = $ticketModel->getUniqueTicketTypes();
                            foreach ($ticketTypes as $type):
                            ?>
                                <option value="<?php echo htmlspecialchars($type['type']); ?>" <?php echo $filter === $type['type'] ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($type['type']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <label for="sort-by" class="sr-only">Sort</label>
                        <select id="sort-by" name="sort">
                            <option value="ASC" <?php echo $sort === 'ASC' ? 'selected' : ''; ?>>ASC</option>
                            <option value="DESC" <?php echo $sort === 'DESC' ? 'selected' : ''; ?>>DESC</option>
                        </select>

                        <button type="submit">Apply</button>
                    </div>
                </form>
            </div>
            <div class="tables-container">
                <table>
                    <thead>
                        <tr>
                            <th>Ticket Type</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Display tickets -->
                        <?php if (!empty($tickets)): ?>
                            <?php foreach ($tickets as $ticket): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($ticket['type']); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['description']); ?></td>
                                    <td><?php echo htmlspecialchars($ticket['price']); ?></td>
                                    <td>
                                        <a href="addticket?id=<?php echo $ticket['id']; ?>" class="fa-solid fa-pen-to-square"></a> |
                                        <a href="managetickets?delete=<?php echo $ticket['id']; ?>" onclick="return confirm('Are you sure?');" class="fa-solid fa-trash"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4">No tickets found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
