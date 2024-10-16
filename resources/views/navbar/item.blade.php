@props([
    'current' => null,
    'href',
    'icon' => null,
])

@php
$classes = [];

// Common classes...
$classes[] = 'relative inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors';
$classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
$classes[] = 'disabled:pointer-events-none disabled:opacity-50';
$classes[] = 'h-9 rounded-md px-3';
$classes[] = 'bg-transparent hover:bg-accent';
$classes[] = 'hover:text-accent-foreground';

// Current classes...
$classes[] = match ($current) {
    true => 'after:content-[\'\'] after:absolute after:w-full after:h-[2px] after:bg-primary after:left-0 after:-bottom-2',
    default => '',
};
@endphp

{{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
<a {{ $attributes->class($classes) }} href="{!! e($href) !!}" {{ $attributes->merge(['data-current' => $current]) }} data-navbar-item>
    @if (is_string($icon))
        <x-ui::icon class="mr-2" :name="$icon" variant="mini" data-navbar-icon />
    @endif

    {{ $slot }}
</a>
