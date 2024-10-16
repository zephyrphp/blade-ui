@props([
    'heading' => null,
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'flex flex-col';
@endphp

<div {{ $attributes->class($classes) }} data-navlist-group>
    @if ($heading)
        <x-ui::navlist.heading>
            {{ $heading }}
        </x-ui::navlist.heading>
    @endif

    {{ $slot }}
</div>
