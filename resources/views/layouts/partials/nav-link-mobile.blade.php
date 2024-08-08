@props(['active' => false])

<a {{ $attributes }} class="{{ $active ? 'text-black' : 'text-gray-400 hover:text-black'}} block rounded-md px-3 py-2 text-sm font-bold" aria-current="{{ $active ? 'page' : 'false' }}">{{ $slot }}</a>