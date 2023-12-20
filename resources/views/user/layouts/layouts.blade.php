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
<body>

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
                        <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-blue rounded-md px-3 py-2 text-sm font-medium">GAMING GEARS</a>
                    </div>
                </div>
            </div>

            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button>
                    <i class="fas fa-shopping-cart  text-lg"></i>
                </button>
            </div>

            <!-- ... Bagian Login & Logout ... -->
            <div class="uk-navbar-right text-gray-300 hover:bg-gray-700 hover:text-blue rounded px-3 py-2 text-sm font-medium">
                @auth
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="uk-button uk-button-primary rounded">
                    <i class="fas fa-user text-lg"></i>
                    <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
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

@yield('container')

 <!-- Footer -->
<div class="flex items-end w-full min-h-screen bg-white">

<!-- component -->
<div class="flex items-end w-full min-h-screen bg-white">

    <footer class="w-full text-gray-700 bg-gray-100 body-font">
        <div
            class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
            <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                   <a href="img/LOGONOLIFE.png"><img src="img/LOGONOLIFE.png" width="60" alt="">
                   </a>
                </a>
                <p class="mt-2 text-sm text-gray-500">Media Sosial</p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a class="text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a class="ml-3 text-gray-500 cursor-pointer hover:text-gray-700">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                    <nav class="mb-10 list-none">
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">nolifestore@gmail.com</a>
                        </li>
                        <li class="mt-3">
                            <a class="text-gray-500 cursor-pointer hover:text-gray-900">+62838906478</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                    <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">LOCATION</h2>
                    <nav class="mb-10 list-none">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2010349724183!2d107.59067007370997!3d-6.866496667179104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sen!2sid!4v1702714743551!5m2!1sen!2sid"
                        width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="bg-gray-300">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm text-gray-700 capitalize xl:text-center">© 2023 | By : NoLifeStore </p>
            </div>
        </div>
    </footer>

</div>
</div>
</body>    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
    <script>
        AOS.init();
    </script>
</html>