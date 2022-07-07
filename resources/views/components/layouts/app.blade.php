<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name','Lara-Dashboard')}}</title>
    {{-- vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
    </style>
</head>
<body class="antialiased font-sans">
    <div  x-data="{ toastAlert : @js( session('success') )  }">
        <div x-data="{sidebarOpen : false}" class="flex min-h-screen bg-gray-100 font-roboto" >
            <!-- This is a sidebar -->
            <x-sidebar.sidebar/>

            <!-- This is a content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                 <!-- This is a navigation -->
                <x-layouts.navigation/>

                <main class="flex-1 overflow-x-hidden overflow-y-auto ">
                    <div class="container mx-auto px-6 py-8">
                        {{$slot}}
                    </div>
                </main>

            </div>
        </div>
    </div>


    <script>
    function toastNotification() {
        return {
            open: true,
            title: "Toast Title",
            message: "Toast message",
            success: false,
            openToast() {
                this.open = true
                setTimeout(() => {
                    this.open = false
                }, 5000)
            }
        }
    }
    </script>
</body>
</html>
