@php
    $classes = [];

    // Common classes...
    $classes[] = 'text-sm font-medium';
@endphp

<label {{ $attributes->class($classes) }} data-label>
    {{ $slot }}
</label>
