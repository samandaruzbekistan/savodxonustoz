<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">
    @include('partials.public-nav')

    <main class="mx-auto max-w-7xl px-4 py-8">
        @include('partials.flash')
        @yield('content')
    </main>

    @include('partials.footer')
    @stack('scripts')
</body>
</html>
