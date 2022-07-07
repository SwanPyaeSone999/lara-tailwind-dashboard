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
    <div class="flex justify-center items-center min-h-screen bg-gray-200 py-6 px-3 font-roboto">
        {{$slot}}
    </div>
</body>
</html>
