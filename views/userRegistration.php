<?php
  include('includes/header.php'); 
  include('controllers/userController.php')
?>

<div class="overlay">
    <div class="login">
      <h1>Jion Us</h1>
      <form action="/register" method="POST">
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email"placeholder="email" required>
        <input type="phone" name="phone"placeholder="phone" required>
        <input type="password" name="password" placeholder="create password" required>
        <button type="submit">Register</button>
      </form>
    <p>I have an acount, <a href="#">Login</a></p>
    </div>
</div>



<?php
  include('includes/footer.php');  
?>