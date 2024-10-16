@props([
    'name',
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'text-sm text-destructive';
@endphp

@error($name)
<p {{ $attributes->class($classes) }} data-error>
    {{ $message }}
</p>
@enderror
