<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>



    <!-- Hero Container -->
    <div class="mx-auto max-w-7xl px-5 py-16 md:px-10 md:py-20">
      <!-- Component -->
      <div class="mx-auto mb-8 w-full max-w-3xl text-center md:mb-12 lg:mb-16">
        <!-- Hero Title -->
        <h1 class="mb-4 text-4xl font-bold md:text-6xl"> Chill with <br> Corkcicle - Elegance Meets Functionality </h1>
        <p class="mx-auto mb-5 max-w-lg text-sm text-gray-400 sm:text-xl md:mb-6 lg:mb-8 font-serif">
        <i>
            Elevate Your Drinking Experience. Unmatched Insulation, Stylish Design, and Ultimate Convenience for Every Sip.
        </i>
        </p>
        <!-- Hero Button -->
        <div class="flex items-stretch justify-center">
          <a href="collection" class="mr-5 inline-block rounded-md bg-black px-8 py-4 text-center font-semibold text-white md:mr-6 lg:mr-8"> Shop All Products </a>
        </div>
      </div>
      <!-- Hero Image -->
      {{-- <img src="{{ asset('images/corkcicle2.jpg') }}" alt="" class="inline-block h-full w-full object-contain" /> --}}
    </div>

    <!-- Component: Card Carousel -->
    <div class="relative w-full overflow-hidden bg-gray-100 rounded glide-06">
        <!-- Slides -->
        <div class="overflow-hidden" data-glide-el="track">
            <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                <li><img src="{{ asset('images/tumbler01.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
                <li><img src="{{ asset('images/tumbler02.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
                <li><img src="{{ asset('images/tumbler03.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
                <li><img src="{{ asset('images/tumbler04.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
                <li><img src="{{ asset('images/tumbler05.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
                <li><img src="{{ asset('images/tumbler06.webp') }}" class="w-full max-w-full max-h-full m-auto" /></li>
            </ul>
        </div>
        <!-- Controls -->
        <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2 " data-glide-el="controls">
            <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <title>prev slide</title>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
            </button>
            <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <title>next slide</title>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </button>
        </div>
        <!-- Indicators -->
        <div class="absolute bottom-0 flex items-center justify-center w-full gap-2" data-glide-el="controls[nav]">
            <button class="p-4 group" data-glide-dir="=0" aria-label="goto slide 1"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=1" aria-label="goto slide 2"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=2" aria-label="goto slide 3"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=3" aria-label="goto slide 4"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=4" aria-label="goto slide 5"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=5" aria-label="goto slide 6"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
            <button class="p-4 group" data-glide-dir="=6" aria-label="goto slide 7"><span class="block w-2 h-2 transition-colors duration-300 rounded-full ring-1 ring-slate-700 bg-white/20 focus:outline-none"></span></button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

    <script>
        var glide06 = new Glide('.glide-06', {
            type: 'carousel',
            focusAt: 'center',
            perView: 3,
            autoplay: 3000,
            animationDuration: 700,
            gap: 24,
            classes: {
                activeNav: '[&>*]:bg-slate-700',
            },
            breakpoints: {
                1024: {
                    perView: 2
                },
                640: {
                    perView: 1
                }
            },
        });

        glide06.mount();
    </script>
    <!-- End Card Carousel -->


    <!-- COLLAB -->
      <div class=" w-full mt-24 px-5 py-16 md:py-20 overflow-hidden" data-aos="fade-up-right">
        <!-- Title -->
        <h2 class="text-center text-2xl font-bold md:text-5xl mb-5"> Popular Collabs. </h2>
        <!-- Content -->
        <div class="flex flex-wrap justify-center">
          <!-- Item -->
          <a href="collection" class="flex rounded-md p-4 lg:p-2 sm:w-1/2 md:w-1/3">
            <img src="{{ asset('images/collab01.webp') }}" alt="gambar collabs"/>
          </a>
          <a href="collection" class="flex rounded-md p-4 lg:p-2 sm:w-1/2 md:w-1/3">
            <img src="{{ asset('images/collab02.webp') }}" alt="gambar collabs" />
          </a>
          <a href="collection" class="flex rounded-md p-4 lg:p-2 sm:w-1/2 md:w-1/3">
            <img src="{{ asset('images/collab03.webp') }}" alt="gambar collabs" />
          </a>
          <a href="collection" class="flex rounded-md p-4 lg:p-2 sm:w-1/2 md:w-1/3">
            <img src="{{ asset('images/collab04.webp') }}" alt="gambar collabs" />
          </a>
          <a href="collection" class="flex rounded-md p-4 lg:p-2 sm:w-1/2 md:w-1/3">
            <img src="{{ asset('images/collab05.webp') }}" alt="gambar collabs" />
          </a>
      </div>

      {{-- PORT --}}
            <div class="w-full px-5 py-16 md:px-10 md:py-20">
            <!-- Title -->
            <h2 class="text-center text-3xl font-bold md:text-4xl mb-16 mt-24"> SEASONAL FEATURES </h2>
            <!-- Content -->
            <div class="grid justify-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" data-aos="fade-up-left">
                <!-- Item -->
                <a href="collection" class="flex flex-col">
                <img src="{{ asset('images/season01.webp')  }}" alt="" class="max-w-lg h-56 object-cover rounded-md transition-all duration-100 hover:rounded-full hover:duration-700" />
                <p class="mb-1 text-left font-extrabold text-md uppercase">LEAKPROOF GO CUP</p>
                </a>
                <!-- Item -->
                <a href="collection" class="flex flex-col">
                <img src="{{ asset('images/season02.webp')  }}" alt="" class="max-w-lg h-56 object-cover rounded-md transition-all duration-100 hover:rounded-full hover:duration-700   " />
                <p class="mb-1 text-left font-extrabold text-md uppercase">Tailgating Essentials</p>
                </a>
                <!-- Item -->
                <a href="collection" class="flex flex-col">
                <img src="{{ asset('images/season03.webp')  }}" alt="" class="max-w-lg h-56 object-cover rounded-md transition-all duration-100 hover:rounded-full hover:duration-700   " />
                <p class="mb-1 text-left font-extrabold text-md uppercase">20% Off Best-Sellers</p>
                </a>
                <!-- Item -->
                <a href="collection" class="flex flex-col">
                <img src="{{ asset('images/season04.webp')  }}" alt="" class="max-w-lg h-56 object-cover rounded-md transition-all duration-100 hover:rounded-full hover:duration-700   " />
                <p class="mb-1 text-left font-extrabold text-md uppercase">20% Off Coolers</p>
                </a>
            </div>
        </div>

      {{-- TESTI --}}
      <div class="mx-auto max-w-7xl mt-24 px-5 py-16 md:px-10 md:py-20">
        <!-- Heading Text -->
        <h2 class="mx-auto mb-6 w-full max-w-3xl text-center text-3xl font-semibold md:mb-12 md:text-5xl">What Our Clients Are Saying</h2>
        <!-- Testimonial Wall -->
        <div class="mb-8 gap-5 py-4 [column-count:2] md:mb-12 md:[column-count:2] lg:mb-16 lg:[column-count:3]">
            <!-- Item -->
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">John Doe</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “The service provided was exceptional, truly elevating our business.” </p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
            <!-- Item -->
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">Jane Smith</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “Highly recommend for anyone looking to improve their operations.” </p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
            <!-- Item -->
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">Emily Johnson</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “A game-changer for our workflow efficiency.” </p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
            <!-- Item -->
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">Michael Brown</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “The best decision we made for our tech stack.” </p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
            {{-- item --}}
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">Sophia Williams</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “Their approach has completely transformed our recruitment process.</p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
            <div class="mb-6 gap-6 overflow-hidden rounded-2xl border border-solid border-gray-300 bg-white p-8" data-aos="zoom-in-up">
                <div class="mb-4 flex flex-row">
                    <div class="flex flex-col">
                        <h6 class="text-base font-semibold">David Thompson</h6>
                    </div>
                </div>
                <p class="mb-4 text-sm text-gray-500"> “An invaluable partner in streamlining our financial operations.”</p>
                <div class="flex">
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                    <img src="{{ asset('images/bintang.png') }}" alt="" class="mr-1.5 inline-block w-4 flex-none" data-aos="zoom-in-down" />
                </div>
            </div>
        </div>
    </div>

</x-layout>
