@php
    $classes = [];

    // Common classes...
    $classes[] = 'relative flex h-9 w-9 shrink-0 overflow-hidden rounded-full';
@endphp

<div {{ $attributes->class($classes) }} data-avatar>
    {{ $slot }}
</div>
