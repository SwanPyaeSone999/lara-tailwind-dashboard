@props(['title'])

<a href="/"  class="flex items-center">
    <x-icons.icon name="logo" class="w-10 h-10"></x-icons.icon>
    <span class="mx-2 text-xl font-semibold text-white">{{$title ?? $slot}}</span>
</a>

