<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

</head>
<body>
<div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
    <div class="uk-container uk-container-expand">
        <nav uk-navbar>
            <div class="uk-navbar-left">
                <a  href="#offcanvas-usage" uk-toggle id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                <a href="#" class="uk-navbar-item uk-logo">
                    Dashboard
                </a>
            </div>
            <div id="offcanvas-usage" uk-offcanvas>
                <div class="uk-offcanvas-bar">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="#">Edit Profile</a></li>
                        <!-- <li><a href="#">Logout</a></li> -->
                        <li>
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
                        </li>
                    </ul>                      
                </div>
            </div>
        </nav>
    </div>
</div>
<div id="sidebar" class="tm-sidebar-left uk-background-default">
    <center>
        <div class="user">
            <div class="uk-margin-top"></div>
            <div id="name" class="uk-text-truncate">Nama Admin</div>
            <div id="email" class="uk-text-truncate">emailadmin@gmail.com</div>
            <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
        </div>
    </center>
    <ul class="uk-nav uk-nav-default">

        <li class="uk-nav-header">
            Content
        </li>
        <li><a href="">Halaman 1</a></li>
        <li><a href="">Halaman 2</a></li>
        <li><a href="">Halaman 3</a></li>

    </ul>
</div>
<div class="container">
    @yield('container')
</div>
</body>
</html>