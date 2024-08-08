@props(['active' => false, 'href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => ($active ? 'text-black font-bold' : 'text-gray-400 hover:text-black') . ' rounded-md px-3 py-2 text-sm']) }} aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>