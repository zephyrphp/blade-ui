@props([
    'text' => null,
    'vertical' => false,
])

@php
    $orientation ??= $vertical ? 'vertical' : 'horizontal';

    $classes = [];

    // Common classes...
    $classes[] = 'bg-muted border-0';

    // Orientation classes...
    $classes[] = match ($orientation) {
        'horizontal' => 'h-px w-full',
        'vertical' => 'self-stretch self-center w-px',
    };
@endphp

@if ($text)
    <div class="flex w-full items-center" role="none" data-orientation="{{ $orientation }}" data-separator>
        <div {{ $attributes->class($classes, 'grow') }}></div>

        <span class="mx-6 shrink whitespace-nowrap text-sm font-medium text-muted">
            {{ $text }}
        </span>

        <div {{ $attributes->class($classes, 'grow') }}></div>
    </div>
@else
    <div
        {{ $attributes->class($classes, 'shrink-0') }}
        data-orientation="{{ $orientation }}"
        data-separator
        role="none"
    ></div>
@endif
