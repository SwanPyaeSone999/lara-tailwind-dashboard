<header class="flex items-center shadow-md justify-between px-6 py-2 bg-white ">

    <div class="flex items-center">
        <!-- This is a sidebar open button -->
        <button x-on:click="sidebarOpen = true" class="text-gray-500 focus:outline-none lg:hidden ">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>

    <div  class="flex items-center"  >

         <!-- This is a setting -->
        <div>
            <x-dropdown>
                <x-slot name="toggle">
                    <x-dropdown-button class="flex items-center justify-center space-x-1 px-4 py-1">
                        {{-- <span>{{ auth()->user()->name }}</span>
                        <x-icons.icon name="chevron-down" class="w-4 h-4"/> --}}
                        <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=0D8ABC&color=fff" class="w-8 h-8 rounded-full" alt="">
                    </x-dropdown-button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="/profile">{{__('Profile')}}</x-dropdown-link>

                    <form action="{{ route('logout') }}" method="POST">@csrf
                        <x-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        >
                            {{__('Logout')}}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>

        </div>
    </div>
</header>






