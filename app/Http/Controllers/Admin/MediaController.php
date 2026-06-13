<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    /**
     * Handle inline image uploads from the rich-text editor.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'file' => ['required', 'image', 'max:4096'],
        ]);

        $path = $request->file('file')->store('editor/'.date('Y/m'), 'public');

        return response()->json([
            'location' => Storage::url($path),
            'url' => Storage::url($path),
        ]);
    }
}
