<?php
  include('includes/header.php');  

  if (isset($_POST['book_now'])) {
    header('Location: /ticketbooking');
  }

        
?>

<section class="ticketsSection">
  <h1 class="sectionHeader">Popular Tickets</h1>
    <div class="container tickets">
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/Jazeera_beach_view.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Jaziiro beach</h1>
          <p>Jaziiro Beach is a hidden gem known for its serene atmosphere and stunning natural beauty. With its soft sands and clear waters, it's a peaceful retreat for those looking to escape the crowds and enjoy the tranquil surroundings.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/liido.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Liido beach</h1>
          <p>Liido Beach offers pristine sands and crystal-clear waters, making it a perfect spot for relaxation and seaside enjoyment.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/Jazeera_beach_view.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Jaziiro beach</h1>
          <p>Jaziiro Beach is a hidden gem known for its serene atmosphere and stunning natural beauty. With its soft sands and clear waters, it's a peaceful retreat for those looking to escape the crowds and enjoy the tranquil surroundings.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/liido.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Liido beach</h1>
          <p>Liido Beach offers pristine sands and crystal-clear waters, making it a perfect spot for relaxation and seaside enjoyment.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/Jazeera_beach_view.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Jaziiro beach</h1>
          <p>Jaziiro Beach is a hidden gem known for its serene atmosphere and stunning natural beauty. With its soft sands and clear waters, it's a peaceful retreat for those looking to escape the crowds and enjoy the tranquil surroundings.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
      <div class="ticketCard">
        <div class="imgHolder">
          <img src="assets/images/liido.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
          <h1>Liido beach</h1>
          <p>Liido Beach offers pristine sands and crystal-clear waters, making it a perfect spot for relaxation and seaside enjoyment.</p>
          <form method="POST">
                <button type="submit" name="book_now">Book now</button>
            </form>
        </div>
      </div>
    </div>
</section>



<?php
  include('includes/footer.php');  
?>