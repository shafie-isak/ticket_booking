<header>

    <div class="container header">
        <a href="/">
            <img src="assets/images/logo_white.png" alt="logo">
        </a>
        <nav>
            <ul>
                <li><a href="/" class=<?= $uri == "/" ? "active" : "" ?>>Home</a></li>
                <!-- <li><a href="/dashboard">Dashboard</a></li> -->
                <li><a href="/tickets" class=<?= $uri == "/tickets" ? "active" : "" ?>>Tickets</a></li>
                <li><a href="/about" class=<?= $uri == "/about" ? "active" : "" ?>>About</a></li>
                <li><a href="/contact" class=<?= $uri == "/contact" ? "active" : "" ?>>Contact</a></li>
            </ul>
        </nav>
        <div class="registrLogin">
            <a href="/register" class=<?= $uri == "/register" ? "active" : "" ?>>Register</a>
            <button><a href="/login">Login</a></button>
        </div>
    </div>
</header>