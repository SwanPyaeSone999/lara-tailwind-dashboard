@aware(['error','type'=>'text'])
<input
    x-bind:id="$id('input')"
    type="{{$type}}"
    {{$attributes}}
    {{
        $attributes->class([
            'mt-2 block w-full px-4 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-700 focus:border-1 focus:outline-none',
            'bg-transparent' => !$error,
            'border-red-500' => $error,
        ])
    }}
>
