<x-layouts.guest>
    <x-auth-card>

        <x-slot:logo>
            <span class="text-gray-700 font-semibold text-2xl"> {{__('Register')}} </span>
        </x-slot:logo>

        <form action="{{ route('register') }}" method="POST">@csrf

            <!-- Name -->
            <x-input.group class="mb-3" :error="$errors->first('name')">
                <x-input.label> {{__('Name') }} </x-input.label>
                <x-input.text type="text"  name="name" value="{{old('name')}}"   ></x-input.text>
            </x-input.group>

            <!-- Email Address -->
            <x-input.group class="mb-3" :error="$errors->first('email')">
                <x-input.label> {{__('Email') }} </x-input.label>
                <x-input.text type="email"  name="email" value="{{old('email')}}"   ></x-input.text>
            </x-input.group>

            <!-- Password -->
            <x-input.group class="mb-3" :error="$errors->first('password')">
                <x-input.label> {{__('Password') }} </x-input.label>
                <x-input.text type="password"  name="password" value="{{old('password')}}"   ></x-input.text>
            </x-input.group>

            <!-- Confirm Password -->
            <x-input.group class="mb-3" :error="$errors->first('password_confirmation')">
                <x-input.label> {{__('Confirm Password') }} </x-input.label>
                <x-input.text type="password"  name="password_confirmation" value="{{old('password_confirmation')}}"   ></x-input.text>
            </x-input.group>

             <!-- Register Button -->
            <div class="mt-4">
                <button class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                    {{__('Register')}}
                </button>
            </div>

            <p class="text-sm text-gray-600 mt-4 ">
                {{ __('Already registered?') }}
                <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                    {{ __('Login') }}
                </a>
            </p>

        </form>

    </x-auth-card>
</x-layouts.guest>
