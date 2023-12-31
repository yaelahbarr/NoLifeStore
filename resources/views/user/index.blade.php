@extends('user.layouts.layouts')

@section('container')
<!-- Slider -->

<div class="h-full w-full overflow-hidden flex flex-nowrap " id="slider">
    <div class="bg-blue-600 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner1.jpg" alt="" class="h-full w-full object-cover object-center ">
    </div>
    <div class="bg-pink-400 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner2.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner3.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner4.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner5.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner6.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner7.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner8.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner9.jpg" alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <img src="/img/banner10.jpg" alt="" class="h-full w-full object-cover object-center">
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

 <!-- More products... -->
  <div class="text-center mx-auto mt-8">
    <h2 class="font-bold text-3xl text-gray-900" data-aos="fade-down">BE BETTER BE PROFESSIONAL</h2>
    <p class="mt-6 text-lg leading-8 text-gray-600" data-aos="fade-down">It's not about skills, it's about equipment</p>
  </div>

<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 text-center">
      <a href="/img/bannervga.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img  data-aos="fade-down"  data-aos-duration="1000" src="/img/bannervga.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">VGA</h3>

      </a>
      <a href="/img/bannerpsu.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img  data-aos="fade-down"  data-aos-duration="1000" src="/img/bannerpsu.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">POWER SUPPLY</h3>
      </a>
      <a href="/img/bannerram.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img  data-aos="fade-down"  data-aos-duration="1000" src="/img/bannerram.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">RAM</h3>
      </a>
      <a href="/img/bannermobo.jpeg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img data-aos="fade-down"  data-aos-duration="1000" src="/img/bannermobo.jpeg" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">MOTHERBOARD</h3>
      </a>
      <a href="/img/bannerheadset.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img data-aos="fade-down"  data-aos-duration="1000" src="/img/bannerheadset.jpg" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">HEADSET</h3>
      </a>
      <a href="/img/bannerkeyboard.png" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img data-aos="fade-down"  data-aos-duration="1000" src="/img/bannerkeyboard.png" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">KEYBOARD</h3>
      </a>
      <a href="/img/bannermouse.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img data-aos="fade-down"  data-aos-duration="1000" src="/img/bannermouse.jpg" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">MOUSE</h3>
      </a>
      <a href="/img/bannerkursi.jpg" class="group">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7 transform transition-transform duration-300 group-hover:scale-105">
          <img data-aos="fade-down"  data-aos-duration="1000" src="/img/bannerkursi.jpg" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <h3 class="mt-1 text-lg font-medium text-gray-900">CHAIR</h3>
      </a>   
    </a>     
    </div>
  </div>
</div>

</div>

@endsection
