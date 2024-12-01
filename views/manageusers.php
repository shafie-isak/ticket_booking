
<?php 
    include("includes/dashbordHeader.php");
?>

<div class="dashContainer">
    <?php 
        include("includes/sidebar.php");
    ?>
    <div class="dashContentContainer">
    <div class="dashMainContentCont">
        <div class="contentHeader">
            <h3>Users List</h3>
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
                <select id="sort-order">
                    <option value="ascending" disabled selected><i class="fa-solid fa-angle-down"></i> Ascending</option>
                    <option value="descending"><i class="fa-solid fa-angle-up"></i> Descending</option>
                </select>
            </div>
        </div>
        <div class="tables-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th class="users-table-last-child">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>+1 234 567 890</td>
                        <td>********</td> <
                        <td>Admin</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>+1 987 654 321</td>
                        <td>********</td> 
                        <td>User</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>+1 234 567 890</td>
                        <td>********</td> <
                        <td>Admin</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>+1 987 654 321</td>
                        <td>********</td> 
                        <td>User</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>+1 234 567 890</td>
                        <td>********</td> <
                        <td>Admin</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>+1 987 654 321</td>
                        <td>********</td> 
                        <td>User</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>+1 234 567 890</td>
                        <td>********</td> <
                        <td>Admin</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>+1 987 654 321</td>
                        <td>********</td> 
                        <td>User</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>john.doe@example.com</td>
                        <td>+1 234 567 890</td>
                        <td>********</td> <
                        <td>Admin</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button>
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane.smith@example.com</td>
                        <td>+1 987 654 321</td>
                        <td>********</td> 
                        <td>User</td>
                        <td class="users-table-last-child">
                            <button class="view-btn"><i class="fa-regular fa-eye"></i></button> 
                            <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>