@props([
    'align' => 'right',
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'absolute z-50 mt-2';

    // Alignment classes...
    $classes[] = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        'none', 'false' => '',
        default => 'ltr:origin-top-right rtl:origin-top-left end-0',
    };
@endphp

<div
    {{ $attributes->class($classes) }}
    style="display: none;"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="transform opacity-0 scale-95"
    x-transition:enter-end="transform opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="transform opacity-100 scale-100"
    x-transition:leave-end="transform opacity-0 scale-95"
    @click="open = false"
>
    {{ $slot }}
</div>
