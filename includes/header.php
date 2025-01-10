<header>

<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']); // Check if user is logged in
$username = $isLoggedIn ? htmlspecialchars($_SESSION['name']) : ''; // Get username if logged in
?>

  <div class="container header">
    <div style="display: flex; align-items: center; width: 190px; justify-content: space-between">
      <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <a href="#">
        <img src="assets/images/logo_white.png" alt="logo">
      </a>
    </div>

    <nav id="navMenu">
      <button class="close-btn" onclick="closeMenu()">X</button>
      <ul>
        <li><a href="/" class="<?= $uri == '/' ? 'active' : '' ?>">Home</a></li>
        <!-- <li><a href="/dashboard">Dashboard</a></li> -->
        <li><a href="/tickets" class="<?= $uri == '/tickets' ? 'active' : '' ?>">Tickets</a></li>
        <li class="register-nav"><a href="/register" class="<?= $uri == '/register' ? 'active' : '' ?>">Register</a></li>
        <li><a href="/about" class="<?= $uri == '/about' ? 'active' : '' ?>">About</a></li>
        <li><a href="/contact" class="<?= $uri == '/contact' ? 'active' : '' ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="registrLogin">
    <?php
            // session_start();
            if (isset($_SESSION['user_id'])): // If the user is logged in
                $username = htmlspecialchars($_SESSION['name']); // Retrieve username from the session
            ?>
                <span style="color: white;">Welcome, <?= $username; ?></span>
                <a href="/logout"><button>Logout</button></a>
            <?php else: // If the user is not logged in ?>
                <a href="/register" class="<?= $uri == "/register" ? "active" : "" ?>">Register</a>
                <a href="/login"><button>Login</button></a>
            <?php endif; ?>
    </div>
  </div>
</header>