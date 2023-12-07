<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="/img/Nophoto.png" alt="">
                  </button>
                </div>
                
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                  </div>
              </div>
            </div>
          </div>
        </div>     
        <div class="sm:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2">
          </div>
        </div>
      </nav>
  <!-- component -->
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
      {{-- <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="/img/Nophoto.png" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Barra Alkhasyani Permana</h3>
              <p class="text-sm font-semibold leading-6 text-indigo-600">Ketua | Backend Dev</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="/img/Nophoto.png" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Adnan Rais Purnomo</h3>
              <p class="text-sm font-semibold leading-6 text-indigo-600">Anggota | Backend Dev</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="/img/Nophoto.png" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Faqih Firdaus Kemal Pangestu</h3>
              <p class="text-sm font-semibold leading-6 text-indigo-600">Anggota | Frontend Dev</p>
            </div>
          </div>
        </li>
        <li>
          <div class="flex items-center gap-x-6">
            <img class="h-16 w-16 rounded-full" src="/img/Nophoto.png" alt="">
            <div>
              <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Dios Ahmad Fadhilah</h3>
              <p class="text-sm font-semibold leading-6 text-indigo-600">Anggota | Frontend Dev</p>
            </div>
          </div>
        </li>
      </ul> --}}
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
            <!-- Decorative image grid -->
            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                      <img src="/img/VGA1.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA2.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA3.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA4.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA5.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA6.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="/img/VGA7.jpg" alt="" class="h-full w-full object-cover object-center">
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
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>