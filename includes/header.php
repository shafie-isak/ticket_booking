
<header>
    <div class="container header">
        <a href="#">
            <img src="assets/images/logo_white.png" alt="logo">

        </a>
        <nav>
            <ul>
                <li><a href="/"class= <?= $requestUri == "/" ?  "active": "" ?>>Home</a></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/tickets" class= <?= $requestUri == "/tickets" ?  "active": "" ?>>Tickets</a></li>
                <li><a href="/about" class= <?= $requestUri == "/about" ?  "active": "" ?> >About</a></li>
                <li><a href="/contact" class= <?= $requestUri == "/contact" ?  "active": "" ?> >Contact</a></li>
            </ul>
        </nav>
        <div class="registrLogin">
            <a href="/register" class= <?= $requestUri == "/register" ?  "active": "" ?>>Register</a>
            <button>Login</button>
        </div>
    </div>
</header>
