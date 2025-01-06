<?php
include('includes/header.php');
include_once 'config/database.php';
include 'controllers/userController.php';

$controller = new UserController($conn);
$controller->registerUser();

$user = '';

if (isset($_GET['id'])) {
  $user = $controller->getUserById($_GET['id']);
}

?>

<div class="overlay">
  <div class="login">
    <h1>Jion Us</h1>
    <form action="" method="POST">

      <?php if ($user): ?>
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <?php endif ?>;
      <input type="text" name="name" placeholder="name" required>
      <input type="email" name="email" placeholder="email" required>
      <input type="phone" name="phone" placeholder="phone" required>
      <input type="password" name="password" placeholder="create password" required>
      <button type="submit" name="submit">Register</button>
    </form>
    <p>I have an acount, <a href="/login">Login</a></p>
  </div>
</div>



<?php
include('includes/footer.php');
?>