<?php

use App\Enums\ContentStatus;
use App\Enums\UserRole;
use App\Models\Resource;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

beforeEach(function () {
    Storage::fake('public');
    $this->admin = User::factory()->create(['role' => UserRole::Admin]);
    $this->student = User::factory()->create(['role' => UserRole::Student]);
});

it('redirects guests from admin resources to login', function () {
    get(route('admin.resources.index'))->assertRedirect(route('login'));
});

it('forbids non-admins from admin resources', function () {
    actingAs($this->student)->get(route('admin.resources.index'))->assertForbidden();
});

it('lets an admin view the resource list', function () {
    actingAs($this->admin)->get(route('admin.resources.index'))->assertOk();
});

it('uploads a resource and stores the file', function () {
    $file = UploadedFile::fake()->create('qollanma.pdf', 120, 'application/pdf');

    actingAs($this->admin)->post(route('admin.resources.store'), [
        'title' => 'PIRLS qo\'llanma',
        'status' => ContentStatus::Published->value,
        'file' => $file,
    ])->assertRedirect(route('admin.resources.index'));

    $resource = Resource::firstWhere('slug', 'pirls-qollanma');

    expect($resource)->not->toBeNull()
        ->and($resource->extension->value)->toBe('pdf')
        ->and($resource->author_id)->toBe($this->admin->id)
        ->and($resource->published_at)->not->toBeNull();

    Storage::disk('public')->assertExists($resource->file_path);
});

it('rejects disallowed file types', function () {
    $file = UploadedFile::fake()->create('virus.exe', 10);

    actingAs($this->admin)->post(route('admin.resources.store'), [
        'title' => 'Yomon fayl',
        'status' => ContentStatus::Draft->value,
        'file' => $file,
    ])->assertSessionHasErrors('file');
});

it('soft deletes a resource', function () {
    $resource = Resource::factory()->create();

    actingAs($this->admin)->delete(route('admin.resources.destroy', $resource))
        ->assertRedirect(route('admin.resources.index'));

    $this->assertSoftDeleted($resource);
});

it('enforces unique resource slugs', function () {
    Resource::factory()->create(['slug' => 'mavjud-resurs']);

    actingAs($this->admin)->post(route('admin.resources.store'), [
        'title' => 'Boshqa resurs',
        'slug' => 'mavjud-resurs',
        'status' => ContentStatus::Draft->value,
        'file' => UploadedFile::fake()->create('x.pdf', 10, 'application/pdf'),
    ])->assertSessionHasErrors('slug');
});
