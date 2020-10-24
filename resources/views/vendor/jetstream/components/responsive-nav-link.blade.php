@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-chelsea-cucumber-400 text-base font-medium text-chelsea-cucumber-700 bg-chelsea-cucumber-50 focus:outline-none focus:text-chelsea-cucumber-800 focus:bg-chelsea-cucumber-100 focus:border-chelsea-cucumber-700 transition duration-150 ease-in-out'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
