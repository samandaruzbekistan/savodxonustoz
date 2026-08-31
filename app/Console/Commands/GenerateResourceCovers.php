<?php

namespace App\Console\Commands;

use App\Models\Resource;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Storage;

class GenerateResourceCovers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-resource-covers {--force : Regenerate even if a cover already exists}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Render the first page of each PDF resource as a JPEG cover image, via Ghostscript.';

    private const COVER_DIR = 'resource-covers';

    /**
     * Ghostscript binary candidates, tried in order until one runs successfully.
     *
     * @var array<int, string>
     */
    private const GHOSTSCRIPT_BINARIES = ['gs', 'gswin64c', 'gswin32c'];

    public function handle(): int
    {
        $binary = $this->findGhostscript();

        if (! $binary) {
            $this->error('Ghostscript topilmadi (gs / gswin64c / gswin32c). Avval uni o\'rnating.');

            return self::FAILURE;
        }

        $resources = Resource::query()->where('extension', 'pdf')->get();

        foreach ($resources as $resource) {
            $coverPath = self::COVER_DIR."/{$resource->slug}.jpg";
            $absoluteCoverPath = storage_path('app/public/'.$coverPath);

            if (File::exists($absoluteCoverPath) && ! $this->option('force')) {
                continue;
            }

            $sourcePath = Storage::disk($resource->disk)->path($resource->file_path);

            if (! File::exists($sourcePath)) {
                $this->warn("Fayl topilmadi: {$resource->slug}");

                continue;
            }

            File::ensureDirectoryExists(dirname($absoluteCoverPath));

            $result = Process::run([
                $binary,
                '-dNOPAUSE',
                '-dBATCH',
                '-dSAFER',
                '-sDEVICE=jpeg',
                '-dFirstPage=1',
                '-dLastPage=1',
                '-r120',
                '-dJPEGQ=85',
                '-o', $absoluteCoverPath,
                $sourcePath,
            ]);

            if ($result->failed()) {
                $this->warn("Muqova yaratib bo'lmadi: {$resource->slug}");

                continue;
            }

            $this->info("Muqova yaratildi: {$resource->slug}");
        }

        return self::SUCCESS;
    }

    private function findGhostscript(): ?string
    {
        foreach (self::GHOSTSCRIPT_BINARIES as $binary) {
            if (Process::run([$binary, '-v'])->successful()) {
                return $binary;
            }
        }

        return null;
    }
}
