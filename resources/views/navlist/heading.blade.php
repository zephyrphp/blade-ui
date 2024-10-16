@php
    $classes = [];

    // Common classes...
    $classes[] = 'px-3 py-2 text-sm font-semibold';
@endphp

<div {{ $attributes->class($classes) }} data-navlist-heading>
    {{ $slot }}
</div>
