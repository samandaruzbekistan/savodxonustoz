@extends('layouts.admin')

@section('title', 'Xabar')

@section('content')
    <div class="mb-4">
        <a href="{{ route('admin.messages.index') }}" class="text-sm text-slate-500 hover:text-indigo-700">← Xabarlar ro'yxati</a>
    </div>

    <div class="mx-auto max-w-2xl rounded-2xl border border-slate-200 bg-white p-6">
        <div class="flex items-start justify-between gap-4 border-b border-slate-100 pb-4">
            <div>
                <h2 class="text-lg font-semibold text-slate-800">{{ $message->subject ?: 'Mavzusiz xabar' }}</h2>
                <p class="mt-1 text-sm text-slate-500">{{ $message->name }} &lt;{{ $message->email }}&gt;</p>
            </div>
            <span class="shrink-0 text-xs text-slate-400">{{ $message->created_at->translatedFormat('d M Y, H:i') }}</span>
        </div>

        <div class="prose-content mt-5 max-w-none whitespace-pre-line text-slate-700">{{ $message->message }}</div>

        <div class="mt-6 flex items-center gap-3 border-t border-slate-100 pt-5">
            <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="inline-flex items-center gap-2 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-700">
                <x-icon name="mail" class="h-4 w-4" /> Javob yozish
            </a>
            <form method="POST" action="{{ route('admin.messages.destroy', $message) }}" onsubmit="return confirm('Xabar o\'chirilsinmi?')">
                @csrf @method('DELETE')
                <button class="rounded-lg bg-red-50 px-4 py-2 text-sm font-medium text-red-600 hover:bg-red-100">O'chirish</button>
            </form>
        </div>
    </div>
@endsection
