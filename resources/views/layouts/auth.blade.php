<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Kirish') · {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="flex min-h-screen items-center justify-center bg-slate-100 p-4 font-sans text-slate-800 antialiased">
    <div class="w-full max-w-md">
        <div class="mb-6 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-xl font-bold text-indigo-700">
                <span class="grid h-10 w-10 place-items-center rounded-lg bg-indigo-600 font-bold text-white">SU</span>
                {{ config('app.name') }}
            </a>
        </div>

        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
