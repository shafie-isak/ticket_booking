<?php
include "includes/dashbordHeader.php";
include "models/ticketModel.php";
include "config/database.php";
include "controllers/ticketController.php";

$ticketController = new TicketController($conn);

$tickets = $ticketController->getAllTickets();

?>

<div class="dashContainer">
    <?php
    include("includes/sidebar.php");

    if (isset($_GET["delete"])) {
        $ticketController->deleteTicket($_GET["delete"]);
        header("location: /managetickets");
        exit();
    }
    ?>
    <div class="dashContentContainer">
        <div class="dashMainContentCont">
            <div class="contentHeader">
                <h2>Ticket List</h2>
                <a href="/addticket" class="anchor-as--btn">+New Ticket</a>
            </div>
            <div class="filterCont">
                <form>
                    <label for="search-event" class="sr-only">Search an event</label>
                    <div class="search-input-container">
                        <input id="search-event" type="text" placeholder="Search an event">
                        <i class="fa-solid fa-magnifying-glass icon_color"></i>
                    </div>
                </form>
                <div class="filtering">
                    <label for="filter-by" class="sr-only">Filter by</label>
                    <select id="filter-by">
                        <option value="" disabled selected>Filter by</option>
                        <option value="Option1">Option1</option>
                        <option value="Option2">Option2</option>
                        <option value="Option3">Option3</option>
                    </select>
                    <label for="sort-by" class="sr-only">Sort</label>
                    <select id="sort-by">
                        <option value="" disabled selected>Sort</option>
                        <option value="Option1">Option1</option>
                        <option value="Option2">Option2</option>
                        <option value="Option3">Option3</option>
                    </select>
                    <label for="sort-order" class="sr-only">Sort order</label>
                    <!-- <select id="sort-order">
                        <option value="ascending" disabled selected><i class="fa-solid fa-angle-down"></i> Ascending
                        </option>
                        <option value="descending"><i class="fa-solid fa-angle-up"></i> Descending</option>
                    </select> -->
                </div>
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
                         <?php foreach ($tickets as $ticket): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($ticket['type']); ?></td>
                                <td><?php echo htmlspecialchars($ticket['description']); ?></td>
                                <td $><?php echo htmlspecialchars($ticket['price']); ?></td$>
                                <td>
                                    <a href="addticket?id=<?php echo $ticket['id']; ?>"  class="fa-solid fa-pen-to-square"></a> |
                                    <a href="managetickets?delete=<?php echo $ticket['id']; ?>" onclick="return confirm('Are you sure?');" class="fa-solid fa-trash"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>