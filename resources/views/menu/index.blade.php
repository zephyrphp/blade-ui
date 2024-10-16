@php
    $classes = [];

    // Common classes...
    $classes[] = 'overflow-hidden rounded-md border min-w-48 p-1 shadow-md border-border bg-popover text-popover-foreground';
@endphp

<div {{ $attributes->class($classes) }} data-menu>
    {{ $slot }}
</div>
