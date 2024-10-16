@php
$classes = [];

// Common classes...
$classes[] = 'animate-pulse rounded-md bg-muted';
@endphp

<div {{ $attributes->class($classes) }} data-skeleton></div>
