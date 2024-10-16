<div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false" data-dropdown>
    {{ $slot }}
</div>
