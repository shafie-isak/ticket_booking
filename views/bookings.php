<?php 
    include("includes/dashbordHeader.php");
    include_once 'config/database.php';
    // include_once 'models/userModel.php';
    include_once 'controllers/userController.php';

    $userController = new UserController($conn);
    $users = $userController->getUsers();
?>

<div class="dashContainer">
    <?php 
        include("includes/sidebar.php");

        if (isset($_GET["delete"])) {
            $userController->deleteUser($_GET["delete"]);
            header("location: /users");
            exit();
        }
    ?>
    <div class="dashContentContainer">
    <div class="dashMainContentCont">
        <div class="contentHeader">
            <h3>Booking Records</h3>
        </div>
        <div class="filterCont">
            <form>
                <label for="search-event" class="sr-only">Search an event</label>
                <div class="search-input-container">
                    <input id="search-event" type="text" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass icon_color"></i>
                </div>
            </form>
            <!-- <div class="filtering">
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
                <select id="sort-order">
                    <option value="ascending" disabled selected><i class="fa-solid fa-angle-down"></i> Ascending</option>
                    <option value="descending"><i class="fa-solid fa-angle-up"></i> Descending</option>
                </select>
            </div> -->
        </div>
        <div class="tables-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Ticket Type</th>
                        <th>No. Tickets</th>
                        <th>Total price</th>
                        <th>Pay Method</th>
                        <th>Booking Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <?php  foreach($users as $user): ?> -->
                    <tr>
                        <!-- <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['phone']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td> 
                        <td><?php echo htmlspecialchars($user['ticket_type']); ?></td>
                        <td><?php echo htmlspecialchars($user['number_of_tickets']); ?></td>
                        <td><?php echo htmlspecialchars($user['total_price']); ?></td>
                        <td><?php echo htmlspecialchars($user['payment_method']); ?></td>
                        <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                        <td class="users-table-last-child">
                           <a href="register?id=<?php echo $user['id']; ?>" class="fa-solid fa-pen-to-square"></a> |
                           <a href="users?delete=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure?');" class="fa-solid fa-trash"></a>
                        </td> -->
                    </tr>
                    <?php endforeach; ?>
                    
                    <!-- More rows can follow the same structure without the extra "<" -->
                </tbody>
            </table>
        </div>
    </div>
</div>
