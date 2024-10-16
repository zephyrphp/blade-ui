@php
    $classes = [];

    // Common classes...
    $classes[] = '-mx-1 my-1';
@endphp

<x-ui::separator {{ $attributes->class($classes) }} data-menu-separator />
