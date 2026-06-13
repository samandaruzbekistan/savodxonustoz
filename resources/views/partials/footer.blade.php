@php
    $footerSections = collect(config('navigation.public_modules'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));
    $footerHelp = collect(config('navigation.public_more'))
        ->filter(fn ($m) => \Illuminate\Support\Facades\Route::has($m['route']));

    $siteName = isset($settings) ? $settings->get('site_name', config('app.name')) : config('app.name');
    $footerText = isset($settings) ? $settings->get('footer_text') : null;
    $socials = collect([
        'social_telegram' => 'Telegram',
        'social_instagram' => 'Instagram',
        'social_facebook' => 'Facebook',
        'social_youtube' => 'YouTube',
    ])->map(fn ($label, $key) => ['label' => $label, 'url' => isset($settings) ? $settings->get($key) : null])
        ->filter(fn ($s) => ! empty($s['url']));
@endphp

<footer class="mt-20 border-t border-slate-200 bg-white">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 sm:grid-cols-2 lg:grid-cols-4">
        {{-- Brand --}}
        <div class="sm:col-span-2 lg:col-span-1">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-lg font-bold text-indigo-700">
                <span class="grid h-9 w-9 place-items-center rounded-lg bg-indigo-600 text-sm font-bold text-white">SU</span>
                {{ $siteName }}
            </a>
            <p class="mt-3 max-w-xs text-sm text-slate-500">{{ $footerText ?: "Bo'lajak boshlang'ich sinf o'qituvchilari uchun o'qish savodxonligini rivojlantirish metodik platformasi." }}</p>

            @if ($socials->isNotEmpty())
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($socials as $social)
                        <a href="{{ $social['url'] }}" target="_blank" rel="noopener" class="rounded-lg bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-600 hover:bg-indigo-50 hover:text-indigo-700">{{ $social['label'] }}</a>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Sections --}}
        <div>
            <h3 class="mb-3 text-xs font-semibold uppercase tracking-wide text-slate-400">Bo'limlar</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-slate-600 hover:text-indigo-700">Bosh sahifa</a></li>
                @foreach (($navCategories ?? collect()) as $navCategory)
                    <li><a href="{{ route('sections.show', $navCategory->slug) }}" class="text-slate-600 hover:text-indigo-700">{{ $navCategory->name }}</a></li>
                @endforeach
            </ul>
        </div>

        {{-- Modules --}}
        <div>
            <h3 class="mb-3 text-xs font-semibold uppercase tracking-wide text-slate-400">Platforma</h3>
            <ul class="space-y-2 text-sm">
                @forelse ($footerSections as $module)
                    <li><a href="{{ route($module['route']) }}" class="text-slate-600 hover:text-indigo-700">{{ $module['label'] }}</a></li>
                @empty
                    <li class="text-slate-400">Tez orada</li>
                @endforelse
            </ul>
        </div>

        {{-- Help --}}
        <div>
            <h3 class="mb-3 text-xs font-semibold uppercase tracking-wide text-slate-400">Yordam</h3>
            <ul class="space-y-2 text-sm">
                @foreach ($footerHelp as $item)
                    <li><a href="{{ route($item['route']) }}" class="text-slate-600 hover:text-indigo-700">{{ $item['label'] }}</a></li>
                @endforeach
                <li><a href="{{ route('login') }}" class="text-slate-600 hover:text-indigo-700">Kirish</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-100">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-2 px-4 py-5 text-sm text-slate-500 sm:flex-row">
            <p>&copy; {{ date('Y') }} {{ $siteName }} · savodxonustoz.uz</p>
            <p>Barcha huquqlar himoyalangan</p>
        </div>
    </div>
</footer>
