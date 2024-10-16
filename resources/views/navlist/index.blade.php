@php
    $classes = [];

    // Common classes...
    $classes[] = 'relative z-10 flex flex-col overflow-visible min-h-auto space-y-1';
@endphp

<div {{ $attributes->class($classes) }} data-navlist>
    {{ $slot }}
</div>
