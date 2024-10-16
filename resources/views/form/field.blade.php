@php
    $classes = [];

    // Common classes...
    $classes[] = 'space-y-2 w-full';
@endphp

<div {{ $attributes->class($classes) }} data-field>
    {{ $slot }}
</div>
