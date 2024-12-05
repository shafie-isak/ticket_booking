<?php
  include('includes/header.php');  

 
?>

<div class="heroSection">
    <div class="container hero">
        <div class="heroText">
            <h1>"Your Dream Trip, Just a <br><span>Click Away</span>"</h1>
            <p>
                Browse destinations, book tickets, and start your adventure today!
                This combines an inviting message with a clear prompt to take action, 
                guiding users to explore and book their trips effortlessly.
            </p>
            <form>
                <input type="text" placeholder="Search an event">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass icon_color"></i>
                </button>
            </form>
            <a href="/tickets"><button class="btn">Explore more</button></a>
        </div>
        <div class="image-container">
            <img src="assets/images/image2.jpg" class="image image1" alt="Image 1">
            <img src="assets/images/image3.jpg" class="image image2" alt="Image 2">
            <img src="assets/images/image1.jpeg" class="image image3" alt="Image 3">
        </div>
    </div>
</div>


<section class="ticketsSection">
  <h1 class="sectionHeader">Popular Tickets</h1>
  <div class="slider-container">
    <button class="arrow left" onclick="moveSlide('left')">←</button>
    <div class="container scroller">
    <div class="ticketCard">
        <div class="imgHolder">
            <img src="assets/images/Jazeera_beach_view.jpg" alt="liido">
        </div>
        <div class="ticketcaption">
            <h1>Jaziiro beach</h1>
            <p>Jaziiro Beach is a hidden gem known for its serene atmosphere and stunning natural beauty. With its soft sands and clear waters, it's a peaceful retreat for those looking to escape the crowds and enjoy the tranquil surroundings.</p>
            
            <!-- Form to handle redirection -->
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
    <button class="arrow right" onclick="moveSlide('right')">→</button>
  </div>
</section>


<section class="servicesSection">
<h1 class="sectionHeader">Our Services</h1>
    <div class="services container">
        <div class="card">
            <div class="icon">
                <h1>🚎</h1>
            </div>
            <h1 class="cardheader">Bus</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veritatis.</p>
            <button class="action">Book now</button>
        </div>
        <div class="card">
            <div class="icon">
                <h1>🚙</h1>
            </div>
            <h1 class="cardheader">Car</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veritatis.</p>
            <button class="action">Book now</button>
        </div>
        <div class="card">
            <div class="icon">
                <h1>🚢</h1>
            </div>
            <h1 class="cardheader">ship</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veritatis.</p>
            <button class="action">Book now</button>
        </div>
        <div class="card">
            <div class="icon">
                <h1>✈</h1>
            </div>
            <h1 class="cardheader">Flayt</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veritatis.</p>
            <button class="action">Book now</button>
        </div>
    </div>
</section>

<section class="partnersSection">
  <h1 class="sectionHeader">Our Partners</h1>
  <div class="partnersContainer">
    <div class="partnerLogo">
      <img src="assets/images/rikaab.png" alt="Partner 1">
      <p>Rikaab</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/faras.jpeg" alt="Partner 2">
      <p>Faras</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/uber.webp" alt="Partner 3">
      <p>Uber</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/hormuud.png" alt="Partner 4">
      <p>Hormuud</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/jamhuuriya.jpg" alt="Partner 5">
      <p>JUST</p>
    </div>
    <!-- Repeat logos for continuous effect -->
    <div class="partnerLogo">
      <img src="assets/images/somtel.jpg" alt="Partner 1">
      <p>Somtel</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/haleel.jpg" alt="Partner 2">
      <p>Haleel Motors</p>
    </div>
    <div class="partnerLogo">
      <img src="assets/images/beydan.jpg" alt="Partner 3">
      <p>Beydan</p>
    </div>
  </div>
</section>


</div>

<?php
  include('includes/footer.php');  
?>