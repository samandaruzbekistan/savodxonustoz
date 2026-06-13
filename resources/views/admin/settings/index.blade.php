@extends('layouts.admin')

@section('title', 'Sozlamalar')

@section('content')
    <div class="mb-4">
        <h2 class="text-lg font-semibold text-slate-700">Sayt sozlamalari</h2>
        <p class="text-sm text-slate-500">Sayt nomi, aloqa ma'lumotlari va ijtimoiy tarmoq havolalarini boshqaring.</p>
    </div>

    <form method="POST" action="{{ route('admin.settings.update') }}" class="mx-auto max-w-2xl space-y-6">
        @csrf
        @method('PUT')

        @foreach ($groups as $groupKey => $group)
            <section class="rounded-2xl border border-slate-200 bg-white p-6">
                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wide text-slate-500">{{ $group['label'] }}</h3>
                <div class="space-y-4">
                    @foreach ($group['fields'] as $key => $field)
                        @php $current = old($key, $values[$key] ?? ($field['default'] ?? '')); @endphp
                        @if (($field['input'] ?? 'text') === 'textarea')
                            <x-form.textarea :name="$key" :label="$field['label']" :value="$current" :rows="3" />
                        @else
                            <x-form.input :name="$key" :label="$field['label']" :value="$current" />
                        @endif
                    @endforeach
                </div>
            </section>
        @endforeach

        <div class="flex justify-end">
            <button type="submit" class="rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-medium text-white hover:bg-indigo-700">Saqlash</button>
        </div>
    </form>
@endsection
