<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoLife Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
</head>
<body>
<nav class="uk-navbar-container">
    <div class="uk-container ">
        <div uk-navbar >

            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav ">
                    <li class="uk-active"><a href="/">NoLife Store</a></li>
                    <li>
                        <a href="#">PC COMPONENTS</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">VGA</a></li>
                                <li><a href="#">Processor</a></li>
                                <li><a href="#">RAM</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">ACCESSORIES</a></li>
                  </ul>
            </div>

            <div class="uk-navbar-right">
            @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="uk-button uk-button-primary"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            @else
                <form action="/login" method="get">
                    @csrf
                    <ul class="uk-navbar-nav">
                        <li><button type="submit" class="uk-button uk-button-primary">Login</button></li>
                    </ul>
                </form>
            @endauth
            </div>

        </div>
    </div>
</nav>

    <div class="container">
        @yield('container')
    </div>
 
</body>    
<!-- <ul class="navbar-nav ms-auto">  
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
      </ul> -->
</html>