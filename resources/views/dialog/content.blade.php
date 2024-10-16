@props([
    'show' => null,
])

<div
    class="fixed inset-0 z-50 overflow-y-auto px-4 py-6 sm:px-0"
    x-show="show"
    x-on:close.stop="show = false"
    x-on:keydown.escape.window="show = false"
    data-dialog-content
>
    <x-ui::dialog.overlay />

    <div
        class="fixed z-50 grid w-full max-w-lg gap-4 border p-6 shadow-lg left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] bg-background sm:rounded-lg"
        x-show="show"
        x-trap.inert.noscroll="show"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
