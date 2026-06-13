<?php

use App\Support\YouTube;

it('extracts the id from various youtube url formats', function (string $url) {
    expect(YouTube::id($url))->toBe('dQw4w9WgXcQ');
})->with([
    'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
    'https://www.youtube.com/watch?feature=share&v=dQw4w9WgXcQ',
    'https://youtu.be/dQw4w9WgXcQ',
    'https://www.youtube.com/embed/dQw4w9WgXcQ',
    'https://www.youtube.com/shorts/dQw4w9WgXcQ',
    'dQw4w9WgXcQ',
]);

it('returns null for invalid youtube input', function () {
    expect(YouTube::id('https://example.com/video'))->toBeNull()
        ->and(YouTube::id('not-a-url'))->toBeNull();
});

it('builds a thumbnail url', function () {
    expect(YouTube::thumbnail('dQw4w9WgXcQ'))
        ->toBe('https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg');
});
