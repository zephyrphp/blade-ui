@props([
    'variant' => null,
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';

    // Variant classes...
    $classes[] = match ($variant) {
        'creative' => 'border-transparent bg-creative text-creative-foreground hover:bg-creative/80',
        'destructive' => 'border-transparent bg-destructive text-destructive-foreground hover:bg-destructive/80',
        'secondary' => 'border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'outline' => 'text-foreground',
        default => 'border-transparent bg-primary text-primary-foreground hover:bg-primary/80',
    };
@endphp

<div {{ $attributes->class($classes) }} data-badge>
    {{ $slot }}
</div>
