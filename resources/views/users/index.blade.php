<x-layouts.app>
    <div class="flex items-center justify-between" >
        <h3 class="text-gray-700 text-xl font-medium">Users</h3>
        <a href="{{ route('users.create') }}" class="px-4 py-1.5 rounded-md  bg-violet-600 text-white shadow-sm text-sm hover:bg-violet-500">Create User</a>
    </div>
    <form action="{{ route('users.index') }}" method="GET">
        <div class="mt-3 flex flex-col sm:flex-row">
            <div class="block relative mt-2 sm:mt-0">
                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                        <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z"></path>
                    </svg>
                </span>

                <input placeholder="Search" value="{{$search}}" name="search" class="appearance-none rounded-md border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
            </div>
        </div>
    </form>

     <!-- Toast Success -->
    <x-toast-notification message="{{ session('success') }}" />

    <div class="mt-4"  x-data="{ 'showModal': false }">
        <div class="flex flex-col mt-6">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-100 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>

                        @foreach ($users as $user)
                        <tbody class="bg-white">
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="">
                                        <div class="text-sm leading-5 font-medium text-gray-900">{{ $user['name'] }}</div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $user['email'] }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200  ">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('users.edit', $user['id'] ) }}">
                                            <x-icons.icon name="edit" class="w-5 h-5 text-yellow-500"></x-icons.icon>
                                        </a>
                                        <form id="delete" action="{{ route('users.destroy', $user['id'] ) }}" method="POST">@csrf @method('DELETE')
                                            <button  type="button" onclick="
                                                if(confirm('Are you sure to delete')){
                                                    event.preventDefault();
                                                    this.closest('form').submit();
                                                }
                                            ">
                                                <x-icons.icon  name="trash" class="w-5 h-5 text-red-500"></x-icons.icon>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                {{-- links --}}
                <div class="mt-3">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>


