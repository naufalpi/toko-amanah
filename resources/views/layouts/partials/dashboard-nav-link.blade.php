@props(['active' => false, 'href', 'icon' => null])

@php
    $linkClasses = $active 
        ? 'flex text-center p-2 text-base font-bold text-gray-900 bg-gray-100 rounded-lg dark:text-white dark:bg-gray-700 group' 
        : 'flex text-center p-2 text-base font-medium text-gray-600 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';

    $iconClasses = $active 
        ? 'w-6 h-6 text-gray-900 dark:text-white' 
        : 'w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $linkClasses]) }}>
    @if($icon)
        <i class="{{ $icon }} {{ $iconClasses }}" style="font-size: 1.2rem;"></i>
    @endif
    <span class="ml-3">{{ $slot }}</span>
</a>
