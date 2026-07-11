@php
    $icons = [
        'docx' => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'border' => 'border-blue-200', 'label' => 'DOCX', 'icon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
        'doc'  => ['bg' => 'bg-blue-100', 'text' => 'text-blue-700', 'border' => 'border-blue-200', 'label' => 'DOC',  'icon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
        'pdf'  => ['bg' => 'bg-red-100',  'text' => 'text-red-700',  'border' => 'border-red-200',  'label' => 'PDF',  'icon' => 'M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z'],
        'ppt'  => ['bg' => 'bg-orange-100','text' => 'text-orange-700','border' => 'border-orange-200','label' => 'PPT', 'icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6'],
        'pptx' => ['bg' => 'bg-orange-100','text' => 'text-orange-700','border' => 'border-orange-200','label' => 'PPTX','icon' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6'],
    ];

    $dir = public_path("files/dars-ishlanmalar/{$grade}");
    $files = file_exists($dir) ? array_values(array_filter(scandir($dir), fn($f) => !str_starts_with($f, '.') && !str_starts_with($f, '~'))) : [];
@endphp

@if(count($files) > 0)
<div class="mb-5 rounded-2xl border border-slate-200 bg-white overflow-hidden">
    <div class="flex items-center gap-2.5 px-5 py-3.5 border-b border-slate-100 bg-slate-50">
        <div class="h-8 w-8 rounded-lg bg-blue-100 flex items-center justify-center">
            <svg class="h-4 w-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
            </svg>
        </div>
        <h2 class="text-sm font-bold text-slate-800">Yuklab olish uchun fayllar</h2>
        <span class="ml-auto rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-700">{{ count($files) }} ta fayl</span>
    </div>
    <ul class="divide-y divide-slate-100">
        @foreach($files as $filename)
            @php
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                $style = $icons[$ext] ?? $icons['docx'];
                $size = filesize("$dir/$filename");
                $sizeStr = $size > 1048576 ? round($size / 1048576, 1) . ' MB' : round($size / 1024) . ' KB';
                $urlFilename = rawurlencode($filename);
            @endphp
            <li class="flex items-center gap-4 px-5 py-3.5 hover:bg-slate-50 transition-colors">
                <div class="h-9 w-9 shrink-0 rounded-lg {{ $style['bg'] }} border {{ $style['border'] }} flex items-center justify-center">
                    <svg class="h-4 w-4 {{ $style['text'] }}" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $style['icon'] }}"/>
                    </svg>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="text-sm font-medium text-slate-800 truncate">{{ pathinfo($filename, PATHINFO_FILENAME) }}</p>
                    <p class="text-xs text-slate-500 mt-0.5">{{ strtoupper($ext) }} &middot; {{ $sizeStr }}</p>
                </div>
                <a href="{{ asset("files/dars-ishlanmalar/{$grade}/{$urlFilename}") }}"
                   download="{{ $filename }}"
                   class="shrink-0 flex items-center gap-1.5 rounded-lg border border-slate-200 bg-white px-3 py-1.5 text-xs font-semibold text-slate-700 hover:border-blue-300 hover:text-blue-700 hover:bg-blue-50 transition-colors">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/>
                    </svg>
                    Yuklab olish
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endif
