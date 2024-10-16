<div
    class="fixed inset-0 z-50 bg-black opacity-80"
    x-show="show"
    x-on:click="show = false"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    data-dialog-overlay
></div>
