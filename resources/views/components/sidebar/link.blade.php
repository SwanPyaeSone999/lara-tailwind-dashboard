@props(['title' => null,'active'=> false])

<a   x-data="{ active : @js($active) }"
    class="flex items-center px-6 py-2 mt-3 cursor-pointer rounded-md"
    :class="active ? 'text-gray-100 bg-gray-800 bg-opacity-25 ' : ' text-gray-600 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100'"
    {{$attributes}}
    {{-- {{$attributes->class([
        'flex items-center px-6 py-2 mt-3 cursor-pointer',
        'text-gray-100 bg-gray-700 bg-opacity-25' => $active,
        'text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100' => !$active,
    ])}} --}}
    >
    {{$slot}}
    <span class="mx-3 text-sm" >{{ $title ?? $link}}</span>
</a>

