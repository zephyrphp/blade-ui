@props([
    'label' => null,
    'name' => null,
])

@php
    if (empty($name)) {
        $name = $attributes->whereStartsWith('wire:')->isNotEmpty()
            ? $attributes->whereStartsWith('wire:')->first()
            : uniqid();
    }

    $id = 'checkbox-' . $name;

    $classes = [];

    // Common classes...
    $classes[] = 'size-4 rounded-sm border border-border text-primary ring-offset-background';
    $classes[] = 'focus-visible:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';
    $classes[] = 'disabled:cursor-not-allowed disabled:opacity-50';
@endphp

<x-ui::form.field>
    <div class="flex items-center">
        <input {{ $attributes->class($classes) }} {{ $attributes->merge(['id' => $id, 'name' => $name]) }} type="checkbox" data-checkbox />

        @if($label)
            <x-ui::form.label class="ml-2" :for="$id">{{ $label }}</x-ui::form.label>
        @endif
    </div>

    <x-ui::form.error name="{{ $name }}"/>
</x-ui::form.field>
