<?php
include 'includes/header.php';
include 'controllers/userController.php';
include_once 'config/database.php';

$controller = new UserController($conn);
$error_message = $controller->login();
?>

<div class="overlay">
    <div class="login">
        <h1>Welcome back</h1>
        <form action="" method="post">
            <input type="email" placeholder="username" name="loginName" required>
            <input type="password" placeholder="password" name="loginpass" required>
            <button type="submit" name="submit">Login</button>
        </form>
        <?php if (isset($error_message)) : ?>
            <p style="color: red;"><?= $error_message ?></p>
        <?php endif; ?>
        <p>If you don't have an account, <a href="#">Register</a></p>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
