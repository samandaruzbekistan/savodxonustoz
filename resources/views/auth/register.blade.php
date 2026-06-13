@extends('layouts.auth')

@section('title', "Ro'yxatdan o'tish")

@section('content')
    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">
        <h1 class="mb-6 text-center text-xl font-semibold text-slate-800">Ro'yxatdan o'tish</h1>

        @if ($errors->any())
            <x-alert type="error" class="mb-4">{{ $errors->first() }}</x-alert>
        @endif

        <form method="POST" action="{{ route('register.store') }}" class="space-y-4">
            @csrf
            <x-form.input label="Ism" name="name" required autofocus autocomplete="name" />
            <x-form.input label="Email" name="email" type="email" required autocomplete="username" />
            <x-form.input label="Parol" name="password" type="password" required autocomplete="new-password" />
            <x-form.input label="Parolni tasdiqlang" name="password_confirmation" type="password" required autocomplete="new-password" />

            <x-ui.button type="submit" class="w-full justify-center">Ro'yxatdan o'tish</x-ui.button>
        </form>

        <p class="mt-5 text-center text-sm text-slate-500">
            Hisobingiz bormi? <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:underline">Kirish</a>
        </p>
    </div>
@endsection
