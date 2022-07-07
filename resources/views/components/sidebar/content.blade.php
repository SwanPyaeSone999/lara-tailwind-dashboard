<x-sidebar.link href="/dashboard" title="Dashboard" :active="request()->is('dashboard')" >
    <x-icons.icon name="users" class="h-5 w-5"></x-icons.icon>
</x-sidebar.link>

<x-sidebar.link href="/users" title="Users" :active="request()->is('users')" >
    <x-icons.icon name="users" class="h-5 w-5"></x-icons.icon>
</x-sidebar.link>

<x-sidebar.link title="Ui Elements" >
    <x-icons.icon name="ui-elements" class="h-5 w-5"></x-icons.icon>
</x-sidebar.link>

<x-sidebar.link title="Table" href="/">
    <x-icons.icon name="tables" class="h-5 w-5"></x-icons.icon>
</x-sidebar.link>

<x-sidebar.link title="Forms">
    <x-icons.icon name="forms" class="h-5 w-5"></x-icons.icon>
</x-sidebar.link>
