@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2';
@endphp

<header {{ $attributes->class($classes) }} {{ $attributes }} data-dialog-footer>
    {{ $slot }}
</header>
