<?php

namespace App\Services;

use App\Enums\MediaCollection;
use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class MediaUploader
{
    /**
     * Store an uploaded file and attach a Media record to the given model.
     */
    public function attach(UploadedFile $file, Model $model, MediaCollection $collection): Media
    {
        $path = $file->store('media/'.date('Y/m'), 'public');

        return $model->media()->create([
            'collection' => $collection,
            'disk' => 'public',
            'path' => $path,
            'name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'size' => $file->getSize(),
        ]);
    }

    /**
     * Store a standalone file (e.g. cover image) and return its public path.
     */
    public function store(UploadedFile $file, string $folder): string
    {
        return $file->store($folder, 'public');
    }
}
