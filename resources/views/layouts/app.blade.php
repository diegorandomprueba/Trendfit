<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - {{ config('app.name') }}</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">
    @include('layouts.header')
    
    <main class="flex-grow container mx-auto py-10">
        @yield('content')
    </main>

    @include('layouts.footer')
    
    @stack('scripts')
</body>
</html>