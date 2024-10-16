@props([
    'size' => 'base',
    'type' => 'text',
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex w-full rounded-md border border-border bg-background text-sm ring-offset-background';
    $classes[] = 'file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground';
    $classes[] = 'placeholder:text-muted-foreground';
    $classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
    $classes[] = 'disabled:cursor-not-allowed disabled:opacity-50';

    // Size...
    $classes[] = match ($size) {
        'sm' => 'h-8 px-3 py-2',
        default => 'h-10 px-3 py-2',
    };
@endphp

<input
    {{ $attributes->class($classes) }}
    {{ $attributes->merge(['type' => $type]) }}
    data-input
/>
