@php
    $classes = [];

    // Common classes...
    $classes[] = 'rounded-lg border border-border bg-card text-card-foreground shadow-sm';
@endphp

<div {{ $attributes->class($classes) }} data-card>
    {{ $slot }}
</div>
