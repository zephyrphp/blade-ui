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

    $id = 'textarea-' . $name;

    $classes = [];

    // Common classes...
    $classes[] = 'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background';
    $classes[] = 'placeholder:text-muted-foreground';
    $classes[] = 'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2';
    $classes[] = 'disabled:cursor-not-allowed disabled:opacity-50';
@endphp

@if($group)
    <x-ui::form.field>
        <x-ui::form.label :for="$id">{{ $label }}</x-ui::form.label>

        <textarea {{ $attributes->class($classes) }} {{ $attributes->merge(['id' => $id, 'name' => $name]) }} data-textarea></textarea>

        <x-ui::form.error name="{{ $name }}"/>
    </x-ui::form.field>
@else
    <textarea {{ $attributes->class($classes) }} :$attributes data-textarea></textarea>
@endif
