@props([
    'current' => null,
    'href',
    'icon' => null,
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'relative inline-flex items-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors';
    $classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
    $classes[] = 'disabled:pointer-events-none disabled:opacity-50';
    $classes[] = 'h-9 rounded-md px-3';

    // Current classes...
    $classes[] = match ($current) {
        true => 'bg-secondary hover:bg-secondary/80 text-secondary-foreground',
        default => 'bg-transparent hover:bg-accent hover:text-accent-foreground',
    };
@endphp

{{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
<a {{ $attributes->class($classes) }} href="{!! e($href) !!}" {{ $attributes->merge(['data-current' => $current]) }} data-navlist-item>
    @if (is_string($icon))
        <x-ui::icon class="mr-2" :name="$icon" variant="mini" data-navlist-icon />
    @endif

    {{ $slot }}
</a>
