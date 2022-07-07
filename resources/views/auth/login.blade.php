<x-layouts.guest>
    <x-auth-card>

        <x-slot:logo>
            <x-application-logo class="w-16 h-16" />
            <span class="text-gray-700 font-semibold text-2xl">Dashboard</span>
        </x-slot:logo>

        <form class="mt-4" action="{{ route('login') }}" method="POST">@csrf
            <!-- Email Address -->
            <x-input.group class="mb-3" :error="$errors->first('email')">
                <x-input.label> {{__('Email') }} </x-input.label>
                <x-input.text type="email"  name="email" value="swan@gmail.com" ></x-input.text>
            </x-input.group>

             <!-- Password -->
            <x-input.group class="mb-3" :error="$errors->first('password')">
                <x-input.label> {{__('Password')}} </x-input.label>
                <x-input.text type="password"  name="password" value="password"></x-input.text>
            </x-input.group>

            <div class="flex justify-between sm:flex-row  flex-col items-center mt-4">
                <div class="">
                    <label class="inline-flex items-center">
                        <input  name="remember" type="checkbox" class="form-checkbox text-indigo-600">
                        <span class="mx-2 text-gray-600 text-sm"> {{__('Remember me')}} </span>
                    </label>
                </div>

                @if (Route::has('password.request'))
                    <div>
                        <a class="block text-sm fontme text-indigo-700 hover:underline " href="#"> {{__('Forgot your password?')}} </a>
                    </div>
                @endif
            </div>

            <div class="mt-4">
                <button class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                    {{__('Sign in')}}
                </button>
            </div>

            @if (Route::has('register'))
                <p class="text-sm text-gray-600 mt-4">
                    {{ __('Don’t have an account?') }}
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">
                        {{ __('Register') }}
                    </a>
                </p>
            @endif

        </form>

    </x-auth-card>
</x-layouts.guest>
