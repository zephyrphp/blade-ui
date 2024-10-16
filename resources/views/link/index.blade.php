@props([
    'current' => false,
    'href' => '#',
])

@php
    $classes = [];

    // Common classes...
    $classes[] = 'inline text-inherit font-medium underline-offset-[4px] no-underline';
    $classes[] = 'hover:underline';
@endphp

{{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
<a
    {{ $attributes->class($classes) }}
    href="{!! e($href) !!}"
    {{ $attributes->merge(['data-current' => $current]) }}
    data-link
>
    {{ $slot }}
</a>
