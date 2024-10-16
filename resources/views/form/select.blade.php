@props([
    'label' => null,
    'name' => null,
])

@php
    $group ??= filled($label);

    if (empty($name)) {
        $name = $attributes->whereStartsWith('wire:')->isNotEmpty()
            ? $attributes->whereStartsWith('wire:')->first()
            : uniqid();
    }

    $id = 'select-' . $name;

    $classes = [];

    // Common classes...
    $classes[] = 'flex h-10 w-full items-center justify-between rounded-md border border-border bg-background px-3 py-2 text-sm ring-offset-background';
    $classes[] = 'placeholder:text-muted-foreground';
    $classes[] = 'focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';
    $classes[] = 'disabled:cursor-not-allowed disabled:opacity-50';
@endphp

@if($group)
    <x-ui::form.field>
        <x-ui::form.label :for="$id">{{ $label }}</x-ui::form.label>

        <select {{ $attributes->class($classes) }} {{ $attributes->merge(['id' => $id, 'name' => $name]) }} data-select>
            {{ $slot }}
        </select>

        <x-ui::form.error name="{{ $name }}"/>
    </x-ui::form.field>
@else
    <select {{ $attributes->class($classes) }} :$attributes data-select>
        {{ $slot }}
    </select>
@endif
