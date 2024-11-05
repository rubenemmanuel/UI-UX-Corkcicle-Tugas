<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


        {{-- BANNER --}}
        <div class="mx-auto px-5 py-16 md:px-10 md:py-20 bg-gray-100 flex flex-col md:flex-row items-center">
            <div class="mb-8 w-full max-w-3xl text-left md:mb-0 md:w-1/2">
                <h1 class="mb-2 text-6xl font-extrabold">PRODUCTS</h1>
                <p class="mb-5 max-w-lg text-xs text-gray-600 md:mb-6 lg:mb-8">
                    <i>Tumbler Cups, Water Bottles & More.</i>
                </p>
            </div>

            <!-- Responsive Image Container -->
            <div class="w-1/2 flex justify-center items-center">
                <img src="{{ asset('images/corkcicle3.png') }}" alt="Drinkware Products" class="w-full max-w-full md:max-w-2xl lg:max-w-3xl object-contain" />
            </div>
        </div>

        {{-- ITEM --}}
          <div>
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
              <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($items as $item)
                <div class="group relative">
                  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-900">
                        <a href="#">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          {{ $item['name'] }}
                        </a>
                      </h3>
                      <p class="text-sm font-medium text-gray-500">{{ $item['price'] }}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
</x-layout>
