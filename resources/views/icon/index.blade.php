@props([
    'name',
])

<x-dynamic-component :component="'icon::' . $name" :$attributes data-icon />
