<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-gray-100">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-16 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
          <div>
            <h2 class="text-5xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">OUR STORY</h2>
            <p class="mt-4 text-gray-600 text-7xl font-bold" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
                "INVENTIVE."<br>
                "Innovative."<br>
                "Iconic."
                </p>
            <p class=" text-gray-600">Their words, not ours. From the start, Corkcicle has been recognized for not only what we make, but how we make it.</p>

            <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
              <div class="border-t border-gray-200 pt-4" data-aos="zoom-in-right">
                {{-- SATU --}}
                <dt class="font-serif text-lg text-gray-900">2010 - The beginning</dt>
                <dd class="mt-2 text-xl text-black font-extrabold font-serif">We started with a question.</dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dd class="mt-2 text-md text-gray-900 font-serif">How do you chill wine to the perfect drinking temp, without the mess of an ice bucket? To solve it, we tested, obsessed and perfected our way to our very first product: The original Corkcicle Air in-bottle wine chiller.</dd>
              </div>
              <div class="border-t border-gray-200 pt-4" data-aos="zoom-in-right">
                {{-- DUA --}}
                <dt class="font-serif text-lg text-gray-900">2019 - Making everyday extraordinary</dt>
                <dd class="mt-2 text-xl text-black font-extrabold font-serif">Innovate. Elevate. Celebrate.</dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dd class="mt-2 text-md text-gray-900 font-serif">As we grow and evolve, our mission is still the same: Make every sip an experience. How can we tweak commonplace things to make them better? How can we add value to everyday moments? These challenges excite and push us to create cool stuff with meaning.</dd>
              </div>
              <div class="border-t border-gray-200 pt-4" data-aos="zoom-in-right">
                {{-- TIGA --}}
                <dt class="font-serif text-lg text-gray-900">Looking forward - our future</dt>
                <dd class="mt-2 text-xl text-black font-extrabold font-serif">Making sustainable stylish.</dd>
              </div>
              <div class="border-t border-gray-200 pt-4">
                <dd class="mt-2 text-md text-gray-900 font-serif">Style and sustainability shouldn't be tradeoffs. In fact, we believe in creating products that enhance personal style while reducing personal impact on the planet. Our Canteens, Tumblers, Stemless Wine Cups, Mugs, and Tumbler Straws are completely reusable, so you can feel good about making them part of your every day.</dd>
              </div>
            </dl>
          </div>
          {{-- GAMBAR --}}
          <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
            <img src="{{ asset('images/about01.webp') }}" class="rounded-lg bg-gray-50" data-aos="zoom-in">
            <img src="{{ asset('images/about02.webp') }}" class="rounded-lg bg-gray-50" data-aos="zoom-in">
            <img src="{{ asset('images/about03.webp') }}" class="rounded-lg bg-gray-50" data-aos="zoom-in">
            <img src="{{ asset('images/about04.webp') }}" class="rounded-lg bg-gray-50" data-aos="zoom-in">
          </div>
        </div>
      </div>

</x-layout>
