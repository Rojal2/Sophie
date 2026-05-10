<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileService
{
    /**
     * Upload a file and return the path.
     */
    public function upload(UploadedFile $file, string $folder = 'uploads'): string
    {
        return $file->store($folder, 'public');
    }

    /**
     * Delete a file from public storage.
     */
    public function delete(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

    /**
     * Replace an old file with a new one.
     */
    public function update(?string $oldPath, UploadedFile $newFile, string $folder = 'uploads'): string
    {
        if ($oldPath) {
            $this->delete($oldPath);
        }

        return $this->upload($newFile, $folder);
    }
}
