@props([
    'current' => false,
    'href' => null,
    'icon' => null,
    'iconTrailing' => null,
    'iconVariant' => null,
    'size' => 'base',
    'square' => null,
    'type' => 'button',
    'variant' => 'outline',
])

@php
    $square ??= $slot->isEmpty();

    $iconVariant ??= ($square ? 'mini' : 'micro');

    $classes = [];

    // Common classes...
    $classes[] = 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors';
    $classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
    $classes[] = 'disabled:pointer-events-none disabled:opacity-50';

    // Size...
    $classes[] = match ($size) {
        'lg' => 'h-11 rounded-md"' . ' ' . ($square ? 'w-11' : 'px-8'),
        'sm' => 'h-9 rounded-md' . ' ' . ($square ? 'w-9' : 'px-3'),
        default => 'h-10' . ' ' . ($square ? 'w-10' : 'px-4'),
    };

    // Background color...
    $classes[] = match ($variant) {
        'destructive' => 'bg-destructive hover:bg-destructive/90',
        'filled' => 'bg-secondary hover:bg-secondary/80',
        'ghost' => 'bg-transparent hover:bg-accent',
        'primary' => 'bg-primary hover:bg-primary/90',
        default => 'bg-background hover:bg-accent',
    };

    // Border color...
    $classes[] = match ($variant) {
        'outline' => 'border border-border',
         default => '',
    };

    // Text color...
    $classes[] = match ($variant) {
        'destructive' => 'text-destructive-foreground',
        'filled' => 'text-secondary-foreground',
        'primary' => 'text-primary-foreground',
        default => 'hover:text-accent-foreground',
    };
@endphp

@if ($href)
    {{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
    <a {{ $attributes->class($classes) }} href="{!! e($href) !!}" {{ $attributes->merge(['data-current' => $current]) }} data-button>
        @if (is_string($icon))
            <x-ui::icon :class="$square ? '' : 'mr-2'" :name="$icon" :variant="$iconVariant" data-button-icon />
        @endif

        {{ $slot }}

        @if (is_string($iconTrailing))
            <x-ui::icon :class="$square ? '' : 'ml-2'" :name="$iconTrailing" :variant="$iconVariant" data-button-icon data-button-icon-trailing />
        @endif
    </a>
@else
    <button {{ $attributes->class($classes) }} {{ $attributes->merge(['type' => $type, 'data-current' => $current]) }} data-button>
        @if (is_string($icon))
            <x-ui::icon :class="$square ? '' : 'mr-2'" :name="$icon" :variant="$iconVariant" data-button-icon />
        @endif

        {{ $slot }}

        @if (is_string($iconTrailing))
            <x-ui::icon :class="$square ? '' : 'ml-2'" :name="$iconTrailing" :variant="$iconVariant" data-button-icon data-button-icon-trailing />
        @endif
    </button>
@endif
