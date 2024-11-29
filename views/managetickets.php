
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
            <h2>Ticket List</h2>
            <a href="#" class="anchor-as--btn">+New Ticket</a>
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
                            <th>Ticket Type</th>
                            <th>Date</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Zoo</td>
                            <td>2024-12-05</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Swimming Pool</td>
                            <td>2024-12-10</td>
                            <td>5</td>
                            <td>$50.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>2024-12-05</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Swimming Pool</td>
                            <td>2024-12-10</td>
                            <td>5</td>
                            <td>$50.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>2024-12-05</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Swimming Pool</td>
                            <td>2024-12-10</td>
                            <td>5</td>
                            <td>$50.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>2024-12-05</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Swimming Pool</td>
                            <td>2024-12-10</td>
                            <td>5</td>
                            <td>$50.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Zoo</td>
                            <td>2024-12-05</td>
                            <td>2</td>
                            <td>$20.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Swimming Pool</td>
                            <td>2024-12-10</td>
                            <td>5</td>
                            <td>$50.00</td>
                            <td>
                                <button class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="delete-btn"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        
                    </tbody>
            </table>
        </div>
    </div>
</div>

