@props(['name' => 'dot', 'stroke' => '1.6'])

@php
    $icons = [
        'book' => '<path d="M12 6.5C9.8 5.2 6.8 5.2 4.5 6.2v12c2.3-1 5.3-1 7.5.3 2.2-1.3 5.2-1.3 7.5-.3v-12c-2.3-1-5.3-1-7.5.3z"/><path d="M12 6.5v12"/>',
        'cap' => '<path d="M12 4 22 9l-10 5L2 9z"/><path d="M6 11v4.2c0 1.6 2.7 2.8 6 2.8s6-1.2 6-2.8V11"/><path d="M22 9v5"/>',
        'doc' => '<path d="M14 3H7a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"/><path d="M14 3v4h4"/><path d="M9 12h6M9 15.5h6"/>',
        'download' => '<path d="M12 4v10"/><path d="M8 10.5 12 14.5 16 10.5"/><path d="M5 19h14"/>',
        'play' => '<circle cx="12" cy="12" r="8.5"/><path d="M10 8.3 16 12 10 15.7z" fill="currentColor" stroke="none"/>',
        'sparkle' => '<path d="M12 3.5 13.7 8.8 19 10.5 13.7 12.2 12 17.5 10.3 12.2 5 10.5 10.3 8.8z" fill="currentColor" stroke="none"/><path d="M18.6 4.4 19 5.8l1.4.4-1.4.4-.4 1.4-.4-1.4L16.8 6.2l1.4-.4z" fill="currentColor" stroke="none"/>',
        'news' => '<rect x="3.5" y="5.5" width="17" height="13" rx="1.5"/><path d="M7 9.5h6M7 13h10M7 16h7"/>',
        'globe' => '<circle cx="12" cy="12" r="8.5"/><path d="M12 3.5c2.5 2.3 2.5 14.7 0 17M12 3.5c-2.5 2.3-2.5 14.7 0 17"/><path d="M3.5 12h17"/>',
        'clipboard' => '<rect x="5.5" y="5" width="13" height="15" rx="1.8"/><rect x="9" y="3.2" width="6" height="3.6" rx="1"/><path d="M9 13l2 2 4-4"/>',
        'search' => '<circle cx="11" cy="11" r="6.2"/><path d="M20 20 15.6 15.6"/>',
        'chart' => '<path d="M4 20h16"/><rect x="6" y="11" width="3" height="7" rx="0.5"/><rect x="11" y="7" width="3" height="11" rx="0.5"/><rect x="16" y="13" width="3" height="5" rx="0.5"/>',
        'folder' => '<path d="M3.5 7.5a2 2 0 0 1 2-2h3.2l2 2H18.5a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-13a2 2 0 0 1-2-2z"/>',
        'inbox' => '<path d="M3.5 13 6.2 5.5h11.6L20.5 13v4.5a2 2 0 0 1-2 2h-13a2 2 0 0 1-2-2z"/><path d="M3.5 13H9l1 2h4l1-2h5.5"/>',
        'users' => '<circle cx="9" cy="8.5" r="3"/><path d="M3.8 19c0-2.9 2.3-5.2 5.2-5.2s5.2 2.3 5.2 5.2"/><path d="M16 6a3 3 0 0 1 0 6"/><path d="M15.5 13.9c2.4.4 4.2 2.5 4.2 5.1"/>',
        'bulb' => '<path d="M9 18.5h6"/><path d="M10 21h4"/><path d="M7.5 14.2A6 6 0 1 1 16.5 14.2c-.8.8-1.3 1.6-1.5 2.8H9c-.2-1.2-.7-2-1.5-2.8z"/>',
        'help' => '<circle cx="12" cy="12" r="8.5"/><path d="M9.7 9.6a2.4 2.4 0 0 1 4.6.8c0 1.6-2.3 1.9-2.3 3.4"/><circle cx="12" cy="16.4" r="0.7" fill="currentColor" stroke="none"/>',
        'mail' => '<rect x="3.5" y="5.5" width="17" height="13" rx="2"/><path d="M4 7l8 6 8-6"/>',
        'arrow-right' => '<path d="M5 12h14"/><path d="M13 6l6 6-6 6"/>',
        'check' => '<path d="M5 12.5 10 17.5 19 7"/>',
        'dot' => '<circle cx="12" cy="12" r="3.5" fill="currentColor" stroke="none"/>',
        'home' => '<path d="M4 11 12 4l8 7"/><path d="M6 9.5V19a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9.5"/><path d="M10 20v-5h4v5"/>',
        'star' => '<path d="M12 4l2.4 5 5.6.8-4 3.9 1 5.5-5-2.7-5 2.7 1-5.5-4-3.9 5.6-.8z"/>',
        'heart' => '<path d="M12 19.5 4.8 12.4a4.2 4.2 0 0 1 6-6l1.2 1.2 1.2-1.2a4.2 4.2 0 0 1 6 6z"/>',
        'layers' => '<path d="M12 4 21 9l-9 5-9-5z"/><path d="M3.5 13.5 12 18l8.5-4.5"/>',
        'library' => '<path d="M5 5v14M9 5v14"/><rect x="3.5" y="5" width="7" height="14" rx="1"/><path d="M13.5 6.2 18 5l2 13.5-4.5 1.2z"/>',
        'compass' => '<circle cx="12" cy="12" r="8.5"/><path d="M15.5 8.5 13.5 13.5 8.5 15.5 10.5 10.5z" fill="currentColor" stroke="none"/>',
        'chevron-down' => '<path d="M6 9.5 12 15.5 18 9.5"/>',
        'chevron-right' => '<path d="M9.5 6 15.5 12 9.5 18"/>',
        'target' => '<circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="4.5"/><circle cx="12" cy="12" r="0.8" fill="currentColor" stroke="none"/>',
    ];
    $inner = $icons[$name] ?? $icons['dot'];
@endphp

<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" {{ $attributes->merge(['class' => 'h-6 w-6']) }}>
    {!! $inner !!}
</svg>
