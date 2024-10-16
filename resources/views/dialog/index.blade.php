@props([
    'show' => false,
])

<div
    @if($attributes->whereStartsWith('wire:')->isNotEmpty())
        x-data="{ show: @entangle($attributes->wire('model')) }"
    @else
        x-data="{ show: @js($show) }"
    @endif
    data-dialog
>
    {{ $slot }}
</div>
