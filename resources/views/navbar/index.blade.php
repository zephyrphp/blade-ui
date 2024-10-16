@php
    $classes = [];

    // Common classes...
    $classes[] = 'relative z-10 flex max-w-max flex-1 items-center justify-center space-x-1';
@endphp

<div {{ $attributes->class($classes) }} data-navbar>
    {{ $slot }}
</div>
