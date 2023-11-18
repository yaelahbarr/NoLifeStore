<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoLife Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NoLife Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Gaming Gears
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mouse</a></li>
            <li><a class="dropdown-item" href="#">Keyboard</a></li>
            <li><a class="dropdown-item" href="#">Headset</a></li>
            <li><a class="dropdown-item" href="#">Earphone</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PC Component
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Proccesor</a></li>
            <li><a class="dropdown-item" href="#">VGA</a></li>
            <li><a class="dropdown-item" href="#">Power Supply</a></li>
            <li><a class="dropdown-item" href="#">Cooler</a></li>
            <li><a class="dropdown-item" href="#">Motherboard</a></li>
            <li><a class="dropdown-item" href="#">Memory Storage</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">  
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2"></i> Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="nav-item">
            <a href="/login" class="btn btn-outline-light"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

    <div class="container mt-4">
        @yield('container')
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>    
</html>