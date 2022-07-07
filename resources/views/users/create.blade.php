<x-layouts.app>

    <h3 class="text-gray-700 text-xl font-medium">Create Users</h3>
    
    <div class="mt-4">
        <div class="p-3 bg-white rounded-md shadow-md">

            <form action="{{ route('users.store') }}" method="POST">@csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <!-- User Name -->
                    <x-input.group class="mb-3" :error="$errors->first('name')">
                        <x-input.label> {{__('Name') }} </x-input.label>
                        <x-input.text type="text"  name="name" value="{{old('name')}}" ></x-input.text>
                    </x-input.group>
                     <!-- Email -->
                    <x-input.group class="mb-3" :error="$errors->first('email')">
                        <x-input.label> {{__('Email') }} </x-input.label>
                        <x-input.text type="email"  name="email" value="{{old('email')}}" ></x-input.text>
                    </x-input.group>

                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-1 shadow-sm bg-gray-800 text-gray-200 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700"> {{__('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
