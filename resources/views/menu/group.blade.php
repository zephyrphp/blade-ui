@props([
    'heading' => null,
])

@php
    $classes = [];

    // Common classes...
    $classes[] = '-mx-1';

    // Separator classes...
    $classes[] = '[&+&>[data-menu-group-separator-top]]:hidden [&:first-child>[data-menu-group-separator-top]]:hidden [&:last-child>[data-menu-group-separator-bottom]]:hidden';
@endphp

<div {{ $attributes->class($classes) }} role="group" data-menu-group>
    <x-ui::menu.separator data-menu-group-separator data-menu-group-separator-top />

    @if ($heading)
        <x-ui::menu.heading>
            {{ $heading }}
        </x-ui::menu.heading>
    @endif

    {{ $slot }}

    <x-ui::menu.separator data-menu-group-separator data-menu-group-separator-bottom />
</div>
