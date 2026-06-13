@extends('layouts.auth')

@section('title', 'Kirish')

@section('content')
    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
        <h1 class="mb-6 text-center text-xl font-semibold text-slate-800">Tizimga kirish</h1>

        @if ($errors->any())
            <x-alert type="error" class="mb-4">{{ $errors->first() }}</x-alert>
        @endif

        <form method="POST" action="{{ route('login.store') }}" class="space-y-4">
            @csrf
            <x-form.input label="Email" name="email" type="email" required autofocus autocomplete="username" />
            <x-form.input label="Parol" name="password" type="password" required autocomplete="current-password" />

            <label class="flex items-center gap-2 text-sm text-slate-600">
                <input type="checkbox" name="remember" class="rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
                Meni eslab qol
            </label>

            <x-ui.button type="submit" class="w-full justify-center">Kirish</x-ui.button>
        </form>

        <p class="mt-5 text-center text-sm text-slate-500">
            Hisobingiz yo'qmi? <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:underline">Ro'yxatdan o'ting</a>
        </p>
    </div>
@endsection
