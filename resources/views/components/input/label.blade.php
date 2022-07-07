<label
    x-bind:for="$id('input')"
    {{
        $attributes->class(
            'block text-gray-600 mt-1 relative z-10'
        )
    }}
>
        <span>{{$slot}}</span>
</label>
