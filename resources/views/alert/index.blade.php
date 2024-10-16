@props([
    'variant' => null,
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'relative w-full rounded-lg border p-4 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground';

    // Variant classes...
    $classes[] = match ($variant) {
        'creative' => 'border-creative/50 text-creative dark:border-creative [&>svg]:text-creative',
        'destructive' => 'border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive',
        default => 'bg-background text-foreground',
    };
@endphp

<div {{ $attributes->class($classes) }} data-alert>
    {{ $slot }}
</div>
