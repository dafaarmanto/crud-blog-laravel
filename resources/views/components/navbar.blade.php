<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
  <div class="container mt-2">
    <a class="navbar-brand nb" href="/">
      <img src="/images/logo-brand.png" alt="" width="28" height="28" class="d-inline-block align-text-top">
      Dafa's Blog
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nv">
        <li class="nav-item nl">
          <a class="nav-link {{ ($title === "Home") ? "active" : "" }} " href="/">Home</a>
        </li>
        <li class="nav-item nl">
          <a class="nav-link {{ ($title === "About") ? "active" : "" }}" href="/about">About</a>
        </li>
        <li class="nav-item nl">
          <a class="nav-link {{ ($title === "Blog") ? "active" : "" }}" href="/blog">Blog</a>
        </li>
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item nl">
          <a href="/login" class="nav-link btn-second">Login</a>
        </li>
        <li class="nav-item nbtn">
          <button type="button" class="nav-link btn-prim">Sign Up</button>
        </li>    
        @endauth
      </ul>
    </div>
  </div>
</nav>