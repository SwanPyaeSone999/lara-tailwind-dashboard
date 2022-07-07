@props(['error' => null])
<div
        x-data
        x-id="['input']"
       {{ $attributes}}
    >
       {{ $slot}}

    @if($error)
       <div class="text-red-500 text-xs mt-1">{{$error}}</div>
   @endif
</div>

