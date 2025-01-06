<header>
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
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/tickets" class="<?= $uri == '/tickets' ? 'active' : '' ?>">Tickets</a></li>
        <li class="register-nav"><a href="/register" class="<?= $uri == '/register' ? 'active' : '' ?>">Register</a></li>
        <li><a href="/about" class="<?= $uri == '/about' ? 'active' : '' ?>">About</a></li>
        <li><a href="/contact" class="<?= $uri == '/contact' ? 'active' : '' ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="registrLogin">
      <a href="/register" class="<?= $uri == '/register' ? 'active' : '' ?> register">Register</a>
      <button>Login</button>
    </div>
  </div>
</header>
