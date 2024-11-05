<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

<a {{ $attributes }}

class="{{ $active ? 'bg-black text-white' : 'text-black hover:bg-gray-200 hover:text-black'}} rounded-md px-3 py-2 text-sm font-extrabold" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
