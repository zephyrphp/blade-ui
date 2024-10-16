@php
    $classes = [];

    // Common classes...
    $classes[] = 'text-sm text-muted-foreground';
@endphp

<p {{ $attributes->class($classes) }} data-subheading>
    {{ $slot }}
</p>
