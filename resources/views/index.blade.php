<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NoLife Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

</head>
<body>
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
                    <h1 class="text-2xl font-bold text-white sm:px-1 py-2">
                        Welcome to NoLife Store
                      </h1>
                </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch">
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">PC COMPONENTS</a>
                  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">ACCESSORIES</a>
                </div>
              </div>
            </div>
            
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
              </button>
              <div class="uk-navbar-right">

<!-- ... Bagian Login & Logout ... -->
@auth
  <form action="/logout" method="post">
    @csrf
    <button type="submit" class="uk-button uk-button-primary">
      <i class="bi bi-box-arrow-right"></i> Logout
    </button>
  </form>
@else
  <form action="/login" method="get">
    @csrf
    <ul class="uk-navbar-nav">
      <li>
        <button type="submit" class="uk-button uk-button-primary">
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
  <!-- Slider -->
<div class="h-screen w-full overflow-hidden flex flex-nowrap text-center" id="slider">
    <div class="bg-blue-600 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar1.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-pink-400 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar2.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar3.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar4.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar5.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar6.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar7.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar8.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar9.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/Gambar10.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('#slider');
    setTimeout(function moveSlide() {
        const max = slider.scrollWidth - slider.clientWidth;
        const left = slider.clientWidth;

        if (max === slider.scrollLeft) {
            slider.scrollTo({left: 0, behavior: 'smooth'})
        } else {
            slider.scrollBy({left, behavior: 'smooth'})
        }

        setTimeout(moveSlide, 2000)
    }, 2000)

})
</script>
  <div class="bg-white py-24 sm:py-32">
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
      <div class="max-w-2xl">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl " data-aos="fade-right">PC COMPONENTS</h2>
        <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-right">PC COMPONENTS atau Komponen PC adalah elemen perangkat keras individual yang membentuk komputer pribadi (PC). Komponen-komponen ini bekerja bersama untuk memungkinkan komputer melakukan berbagai tugas dan fungsi. </p>
      </div>
    </div>
  </div>
  <div class="relative overflow-hidden bg-white">
    <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
      <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="sm:max-w-lg">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl" data-aos="fade-up-right">VGA</h1>
          <p class="mt-4 text-xl text-gray-500" data-aos="fade-up-right"> VGA pertama kali diperkenalkan oleh IBM pada tahun 1987 sebagai standar koneksi grafis untuk komputer pribadi. VGA adalah antarmuka grafis analog yang umumnya digunakan untuk menghubungkan komputer ke monitor. Kabel VGA memiliki konektor dengan 15 pin yang mengirimkan sinyal video analog dari komputer ke monitor. Meskipun sekarang sudah banyak digantikan oleh antarmuka digital modern seperti HDMI dan DisplayPort, VGA masih dapat ditemui pada beberapa perangkat yang lebih lama atau dalam pengaturan tertentu.</p>
        </div>
        <div>
          <div class="mt-10">
            <!-- image grid -->
            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                      <img  data-aos="zoom-out" src="/img/VGA1.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA2.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA3.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA4.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA5.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA6.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img  data-aos="zoom-out" src="/img/VGA7.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Buy <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
              </svg>
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
  
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="/IMG/VGA_HYDRO_COPPER.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">VGA_HYDRO_COPPER</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$10</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="/img/CROSSHAIR V.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">CROSSHAIR V</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$15</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="/img/icx.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">ICX GEFORCE GTX 1080</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$19</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="/img/msi.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">MSI GTX 970 GAMING 4G</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$15</p>
        </a>
      </div>
    </div>
  </div>
  <!-- Footer -->
<div class="flex items-end w-full min-h-screen bg-white">

  <footer class="w-full text-gray-700 bg-gray-100 body-font">
      <div
          class="container flex flex-col flex-wrap px-5 py-24 mx-auto md:items-center lg:items-start md:flex-row md:flex-no-wrap">
          <div class="flex-shrink-0 w-64 mx-auto text-center md:mx-0 md:text-left">
              <a class="flex items-center justify-center font-medium text-gray-900 title-font md:justify-start">
                  <h1>NoLifeStore</h1>
              </a>
              <p class="mt-2 text-sm text-gray-500">Media Sosial E-commece</p>
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
                  </span>
              </div>
          </div>
          <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">About</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Company</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Careers</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Blog</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Support</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Contact Support</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Help Resources</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Release Updates</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Platform
                  </h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Terms &amp; Privacy</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Pricing</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">FAQ</a>
                      </li>
                  </nav>
              </div>
              <div class="w-full px-4 lg:w-1/4 md:w-1/2">
                  <h2 class="mb-3 text-sm font-medium tracking-widest text-gray-900 uppercase title-font">Contact</h2>
                  <nav class="mb-10 list-none">
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Send a Message</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">Request a Quote</a>
                      </li>
                      <li class="mt-3">
                          <a class="text-gray-500 cursor-pointer hover:text-gray-900">+62838906478</a>
                      </li>
                  </nav>
              </div>
          </div>
      </div>
      <div class="bg-gray-300">
          <div class="container px-5 py-4 mx-auto">
              <p class="text-sm text-gray-700 capitalize xl:text-center">© 2023 | <a href="https://github.com/yaelahbarr/NoLifeStore">By : NoLifeStore</a></p>
          </div>
      </div>
  </footer>
</div>
</body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
  <script>
    AOS.init();
  </script>
</html>