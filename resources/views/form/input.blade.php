@props([
    'description' => null,
    'label' => null,
    'name' => null,
    'size' => 'base',
    'type' => 'text',
])

@php
    $group ??= filled($label);

    if (empty($name)) {
        $name = $attributes->whereStartsWith('wire:')->isNotEmpty()
            ? $attributes->whereStartsWith('wire:')->first()
            : uniqid();
    }

    $id = 'input-' . $name;

    $classes = [];

    // Common classes...
    $classes[] = 'flex w-full rounded-md border border-border bg-background text-sm ring-offset-background';
    $classes[] = 'file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground';
    $classes[] = 'placeholder:text-muted-foreground';
    $classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
    $classes[] = 'disabled:cursor-not-allowed disabled:opacity-50';

    // Size...
    $classes[] = match ($size) {
        'sm' => 'h-8 px-3 py-2',
        default => 'h-10 px-3 py-2',
    };
@endphp

<x-ui::form.field>
    @if($label)
        <x-ui::form.label :for="$id">
            {{ $label }}
        </x-ui::form.label>
    @endif

    @if($description)
        <x-ui::form.description>
            {{ $description }}
        </x-ui::form.description>
    @endif

    <input
        {{ $attributes->class($classes) }}
        {{ $attributes->merge(['id' => $id, 'name' => $name, 'type' => $type]) }}
        data-input
    />

    <x-ui::form.error name="{{ $name }}"/>
</x-ui::form.field>
