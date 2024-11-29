
<div class="ticket-form-container">
    <h1>Add New Ticket</h1>
    <form action="#" method="POST" class="ticket-form">
        <label for="ticket-type">Ticket Type:</label>
        <select id="ticket-type" name="ticket-type" required>
            <option value="zoo">Zoo</option>
            <option value="swimming-pool">Swimming Pool</option>
        </select>

        <label for="ticket-date">Date:</label>
        <input type="date" id="ticket-date" name="ticket-date" required>

        <label for="ticket-quantity">Quantity:</label>
        <input type="number" id="ticket-quantity" name="ticket-quantity" min="1" required>

        <label for="ticket-price">Price:</label>
        <input type="number" id="ticket-price" name="ticket-price" required>

        <button type="submit">Add Ticket</button>
    </form>
</div>