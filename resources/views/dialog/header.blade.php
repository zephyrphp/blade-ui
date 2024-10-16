@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex flex-col space-y-2 text-center sm:text-left';
@endphp

<header {{ $attributes->class($classes) }} {{ $attributes }} data-dialog-header>
    {{ $slot }}
</header>
