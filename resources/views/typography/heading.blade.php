@props([
    'level' => '0',
    'size' => 'base',
])

@php
    $tag = match ($level) {
        '1' => 'h1',
        '2' => 'h2',
        '3' => 'h3',
        default => 'div',
    };

    $classes = [];

    // Common classes...
    $classes[] = 'font-medium';
    $classes[] = '[&:has(+[data-subheading])]:mb-2 [[data-subheading]+&]:mt-2';

    // Size...
    $classes[] = match ($size) {
        'lg' => 'text-xl',
        'xl' => 'text-2xl',
        default => '',
    };
@endphp

<{{ $tag }} {{ $attributes->class($classes) }} data-heading>
    {{ $slot }}
</{{ $tag }}>
