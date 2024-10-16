@php
    $classes = [];

    // Common classes...
    $classes[] = 'aspect-square h-full w-full';
@endphp

<img {{ $attributes->class($classes) }} data-avatar-image/>
