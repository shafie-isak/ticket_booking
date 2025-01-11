<?php
include('includes/header.php');
include "config/database.php";
// include 'includes/auth.php';

if (isset($_POST['book_now'])) {
  session_start();
  if (!isset($_SESSION['user_id'])) {
    header('Location: /login');
    exit();
  } else {
    header('Location: /ticketbooking');
  }
}

$sql = 'SELECT type, description, image_path FROM tickets';
$result = $conn->query($sql);
?>

<section class="ticketsSection">
  <h1 class="sectionHeader">Popular Tickets</h1>
  <div class="container tickets">
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo '<div class="ticketCard">';
        echo '    <div class="imgHolder">';
        echo '        <img src="' . htmlspecialchars($row['image_path']) . '" alt="' . htmlspecialchars($row['type']) . '">';
        echo '    </div>';
        echo '    <div class="ticketcaption">';
        echo '        <h1>' . htmlspecialchars($row['type']) . '</h1>';
        echo '        <p>' . htmlspecialchars($row['description']) . '</p>';
        echo '        <form method="POST" action="/ticketbooking">';
        echo '            <input type="hidden" name="selected_type" value="' . htmlspecialchars($row['type']) . '">';
        echo '            <button type="submit" name="book_now">Book now</button>';
        echo '        </form>';
        echo '    </div>';
        echo '</div>';
      }
    } else {
      echo '<p>No tickets available at the moment.</p>';
    }
    ?>
  </div>
</section>

<?php
include('includes/footer.php');
?>