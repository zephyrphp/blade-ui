@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex items-center p-6 pt-0';
@endphp

<footer {{ $attributes->class($classes) }} {{ $attributes }} data-card-footer>
    {{ $slot }}
</footer>
