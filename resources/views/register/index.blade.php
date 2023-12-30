<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NoLife Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body class="uk-background-cover uk-background-center-center" style="background-image: url('/img/bgrd.png');">  

<!-- Navbar -->
<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img src="img/LOGONOLIFE.png" width="60px" alt="">
                    <h1 class="text-2xl font-bold text-white sm:px-1 py-2">
                        NoLife Store
                    </h1>
                </div>
            <div class="flex flex-1 items-center justify-center  ">
                <div class="hidden sm:ml-6 sm:block ">
                    <div class="flex  space-x-4 space-y-0">
                        <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-blue rounded-md px-3 py-2 text-sm font-medium" aria-current="page">HOME</a>
                        <a href="/pc-components" class="text-gray-300 hover:bg-gray-700 hover:text-blue rounded-md px-3 py-2 text-sm font-medium">PC COMPONENTS</a>
                        <a href="/gaming-gears" class="text-gray-300 hover:bg-gray-700 hover:text-blue rounded-md px-3 py-2 text-sm font-medium">GAMING GEARS</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a href="/cart"><i class="fas fa-shopping-cart  text-lg"></i></a>
            </div>

            <!-- ... Bagian Login & Logout ... -->
            <div class="uk-navbar-right text-gray-300 hover:bg-gray-700 hover:text-blue rounded px-3 py-2 text-sm font-medium">
                @auth
                <div x-data="{ open: false }" @click.away="open = false" class="relative">
                    <button @click="open = !open" class="text-white focus:outline-none">
                        Welcome {{ auth()->user()->name }}
                    </button>
                    <!-- Daftar Dropdown -->
                    <div x-show="open" class="absolute mt-2 bg-gray-800 text-white rounded-md shadow-lg">
                        <a href="#" class="block px-4 py-2">Your Order</a>
                        <a href="#" class="block px-4 py-2">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="uk-button uk-button-primary rounded">
                                    <i class="fas fa-user text-lg"></i>
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </a>
                    </div>
                </div>
                                
                @else
                <form action="/login" method="get">
                    @csrf
                    <ul class="uk-navbar-nav">
                        <li>
                            <button type="submit" class="uk-button uk-button-primary rounded">
                                <i class="bi bi-box-arrow-in-right"></i> Login
                            </button>
                        </li>
                    </ul>
                </form>
                @endauth
            </div>
            <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2">
        </div>
    </div>
</nav>

<div class="uk-container uk-margin-large-top ">
  <div class="uk-card uk-card-default uk-width-1-2@m uk-margin-auto ">
      <div class="uk-card-header">
          <h3 class="uk-card-title">Register</h3>
      </div>
      <div class="uk-card-body">
          <form class="uk-form-stacked" action="/register" method="post">
              @csrf
              <input type="hidden" name="provider" value="local">
              <input type="hidden" name="role" value="user">
              <div class="uk-margin">
                  <label class="uk-form-label" for="name">Name:</label>
                  <div class="uk-form-controls">
                      <input class="uk-input  @error('name') is-invalid @enderror" type="name" id="name" placeholder="Enter your name" name="name">
                      @error('name')
                          <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
              <div class="uk-margin">
                  <label class="uk-form-label" for="email">Email:</label>
                  <div class="uk-form-controls">
                      <input class="uk-input  @error('email') is-invalid @enderror" type="email" id="email" placeholder="Enter your email" name="email">
                      @error('email')
                          <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
              <div class="uk-margin">
                  <label class="uk-form-label" for="password">Password:</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" type="password" id="password" placeholder="Enter your password" name="password">
                  </div>
              </div>
              <div class="uk-margin text-center">
                <button class="uk-button uk-button-primary uk-border-rounded">Sign Up</button>
              </div>
          </form>
          <div class="uk-margin text-center">
          <small class="">You have account? <a href="/login">Login here!</a></small>
        </div>
      </div>
  </div>
</div> 

<br>

</div>
</div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

</body>    
</html>