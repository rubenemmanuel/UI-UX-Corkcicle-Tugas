<section>
    <nav class="font-inter mx-auto h-auto lg:top-0">
        <div class="flex flex-col px-6 py-6 lg:flex-row lg:items-center lg:justify-between lg:px-10 lg:py-4 xl:px-20">
            <a href="/">
                <h3 class="font-extrabold text-2xl">
                    CORCKCICLE.
                </h3>
            </a>
            <div class="flex flex-col pr-3 lg:mt-0 lg:flex lg:flex-row lg:space-x-1 lg:space-y-0 lg:gap-5 w-32 sm:w-fit pb-2">
                <x-nav-link href="/" :active="request()->is('/')">HOME</x-nav-link>
                <x-nav-link href="collection" :active="request()->is('collection')">PRODUCTS</x-nav-link>
                <x-nav-link href="about" :active="request()->is('about')">ABOUT</x-nav-link>
                <x-nav-link href="contact" :active="request()->is('contact')">CONTACT US</x-nav-link>
            </div>
            {{-- <div class="absolute right-5">
                <button id="theme-toggle" class="text-sm font-semibold leading-6 text-gray-900">
                    <i class="fa-solid fa-circle-half-stroke fa-lg dark:text-black text-white"></i>
                </button>
            </div> --}}
        </div>
    </nav>
</section>
