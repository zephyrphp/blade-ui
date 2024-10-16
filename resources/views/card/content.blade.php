@php
    $classes = [];

    // Common classes...
    $classes[] = 'p-6 [&>svg~*]:pl-7 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground';
@endphp

<div {{ $attributes->class($classes) }} data-card-content>
    {{ $slot }}
</div>
