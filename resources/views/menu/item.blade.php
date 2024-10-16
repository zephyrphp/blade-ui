@props([
    'disabled' => false,
    'href' => null,
    'icon' => null,
])

@php
$classes = [];

// Common classes...
$classes[] = 'relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none transition-colors';
$classes[] = 'hover:bg-accent hover:text-accent-foreground';

// Disabled state...
$classes[] = match ($disabled) {
    true => 'opacity-50 pointer-events-none',
    false => '',
};
@endphp

@if ($href)
    {{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
    <a {{ $attributes->class($classes) }} href="{!! e($href) !!}" {{ $attributes }} data-menu-item>
        @if (is_string($icon))
            <x-ui::icon class="mr-2" :name="$icon" variant="mini" data-menu-item-icon />
        @endif

        {{ $slot }}
    </a>
@else
    <button {{ $attributes->class($classes) }} {{ $attributes->merge(['type' => $type]) }} data-menu-item>
        @if (is_string($icon))
            <x-ui::icon class="mr-2" :name="$icon" variant="mini" data-menu-item-icon />
        @endif

        {{ $slot }}
    </button>
@endif
