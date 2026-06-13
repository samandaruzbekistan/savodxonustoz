<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * @return MorphToMany<Content, $this>
     */
    public function contents(): MorphToMany
    {
        return $this->morphedByMany(Content::class, 'taggable');
    }

    /**
     * @return MorphToMany<Video, $this>
     */
    public function videos(): MorphToMany
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }

    /**
     * @return MorphToMany<resource, $this>
     */
    public function resources(): MorphToMany
    {
        return $this->morphedByMany(Resource::class, 'taggable');
    }
}
