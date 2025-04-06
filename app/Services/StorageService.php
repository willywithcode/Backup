<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;

class StorageService
{
    public static function upload(UploadedFile $file)
    {
        $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', $file->getClientOriginalName());
        $file->move(public_path('upload'), $filename);

        return 'upload/' . $filename;
    }
}
