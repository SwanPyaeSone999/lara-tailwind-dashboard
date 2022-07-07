<div  class="relative inline-block text-left" x-data="{open : false}">

    <div @click="open = !open"  @click.away="open = false" @keydown.escape="open = false">
        {{  $toggle }}
    </div>

    <div x-cloak x-show="open"
        x-transition:enter="transition ease-out duration-100    "
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
    >
        <div  x-cloak x-show="open"  class="absolute right-0 mt-2 w-44 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
            <ul class="px-1 py-1 divide-y">
                {{  $content }}
            </ul>
        </div>
    </div>
</div>

