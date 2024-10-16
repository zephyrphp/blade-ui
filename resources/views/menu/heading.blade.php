@php
    $classes = [];

    // Common classes...
    $classes[] = 'px-2 py-1.5 text-sm font-semibold';
@endphp

<div {{ $attributes->class($classes) }} data-menu-heading>
    {{ $slot }}
</div>
