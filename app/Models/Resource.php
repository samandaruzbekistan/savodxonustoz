<?php

namespace App\Models;

use App\Enums\ContentStatus;
use App\Enums\ResourceExtension;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'author_id',
        'title',
        'slug',
        'description',
        'disk',
        'file_path',
        'file_name',
        'mime_type',
        'extension',
        'file_size',
        'download_count',
        'status',
        'published_at',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'extension' => ResourceExtension::class,
            'status' => ContentStatus::class,
            'file_size' => 'integer',
            'download_count' => 'integer',
            'published_at' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function downloads(): HasMany
    {
        return $this->hasMany(ResourceDownload::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function recordDownload(?User $user = null, ?string $ip = null, ?string $userAgent = null): void
    {
        $this->downloads()->create([
            'user_id' => $user?->id,
            'ip_address' => $ip,
            'user_agent' => $userAgent,
        ]);

        $this->increment('download_count');
    }

    #[Scope]
    protected function published(Builder $query): void
    {
        $query->where('status', ContentStatus::Published);
    }
}
