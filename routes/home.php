<?php
  include('includes/header.php');  
?>

<div class="heroSection">
    <div class="container hero">
        <div class="heroText">
            <h1>"Your Dream Trip, Just a <br><span>Click Away</span>"</h1>
            <p>
                Browse destinations, book tickets, and start your adventure today!
                This combines an inviting message with a clear prompt to take action, guiding users to explore and book their trips effortlessly.
            </p>
            <form>
                <input type="text" placeholder="Search an event">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass icon_color"></i>
                </button>
            </form>
            <button class="btn">Book now</button>
        </div>
        <div class="image-container">
            <img src="assets/image/image2.jpg" class="image image1" alt="Image 1">
            <img src="assets/image/image3.jpg" class="image image2" alt="Image 2">
            <img src="assets/image/image1.jpeg" class="image image3" alt="Image 3">
        </div>
    </div>
</div>

<h1 class="sectionHeader">Our Services</h1>

<section class="services container">

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
            <h1>⛵</h1>
        </div>
        <h1 class="cardheader">boat</h1>
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
            <h1>✈️</h1>
        </div>
        <h1 class="cardheader">Flayt</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, veritatis.</p>
        <button class="action">Book now</button>
    </div>
</section>

<?php
  include('includes/footer.php');  
?>