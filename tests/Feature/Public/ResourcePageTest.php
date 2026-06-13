<?php

use App\Models\Resource;
use App\Models\ResourceDownload;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\get;

beforeEach(function () {
    Storage::fake('public');
});

it('lists published resources and hides drafts', function () {
    $published = Resource::factory()->create(['title' => 'Ochiq resurs']);
    $draft = Resource::factory()->draft()->create(['title' => 'Yopiq resurs']);

    get(route('resources.index'))
        ->assertOk()
        ->assertSee($published->title)
        ->assertDontSee($draft->title);
});

it('filters resources by extension', function () {
    $pdf = Resource::factory()->create(['title' => 'Pdf resurs', 'extension' => 'pdf']);
    $zip = Resource::factory()->create(['title' => 'Zip resurs', 'extension' => 'zip']);

    get(route('resources.index', ['extension' => 'pdf']))
        ->assertOk()
        ->assertSee($pdf->title)
        ->assertDontSee($zip->title);
});

it('downloads a resource, increments the counter and logs it', function () {
    $path = 'resources/test/file.pdf';
    Storage::disk('public')->put($path, 'dummy-content');

    $resource = Resource::factory()->create([
        'file_path' => $path,
        'file_name' => 'file.pdf',
        'download_count' => 0,
    ]);

    get(route('resources.download', $resource->slug))
        ->assertOk()
        ->assertDownload('file.pdf');

    expect($resource->refresh()->download_count)->toBe(1)
        ->and(ResourceDownload::where('resource_id', $resource->id)->count())->toBe(1);
});

it('returns 404 when downloading a draft resource', function () {
    $resource = Resource::factory()->draft()->create();

    get(route('resources.download', $resource->slug))->assertNotFound();
});
