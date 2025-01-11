<header>
<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$isAdmin = isset($_SESSION['role']) && $_SESSION['role'] === 'admin'; 
$username = $isLoggedIn ? htmlspecialchars($_SESSION['name']) : '';
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
      <?php if ($isAdmin):  ?>
        <li><a href="/dashboard" class="<?= $uri == '/dashboard' ? 'active' : '' ?>">Dashboard</a></li>
      <?php endif; ?>
      <li><a href="/tickets" class="<?= $uri == '/tickets' ? 'active' : '' ?>">Tickets</a></li>
      <li class="register-nav"><a href="/register" class="<?= $uri == '/register' ? 'active' : '' ?>">Register</a></li>
      <li><a href="/about" class="<?= $uri == '/about' ? 'active' : '' ?>">About</a></li>
      <li><a href="/contact" class="<?= $uri == '/contact' ? 'active' : '' ?>">Contact</a></li>
    </ul>
  </nav>

  <div class="registrLogin">
    <?php
    if ($isLoggedIn): 
      $username = htmlspecialchars($_SESSION['name']);
    ?>
      <span style="color: white;">Welcome, <?= $username; ?></span>
      <a href="/logout"><button>Logout</button></a>
    <?php else: ?>
      <a href="/register" class="<?= $uri == "/register" ? "active" : "" ?>">Register</a>
      <a href="/login"><button>Login</button></a>
    <?php endif; ?>
  </div>
</div>
</header>
