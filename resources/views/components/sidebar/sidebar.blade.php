<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed inset-y-0 left-0 z-30 w-52 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">

    <div class="flex items-center justify-center mt-4">
        <x-sidebar.logo title="Dashboard"/>
    </div>

    <nav class="mt-8 px-2">
        <x-sidebar.content/>
    </nav>
</div>
