@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex flex-col p-6 pb-0';
@endphp

<header {{ $attributes->class($classes) }} {{ $attributes }} data-card-header>
    {{ $slot }}
</header>
