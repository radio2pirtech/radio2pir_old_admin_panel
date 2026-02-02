<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Common_function{

    public static function store_file($file, string $path, string $file_name): string
    {
        return Storage::disk('public')->putFileAs($path, $file, $file_name);
    }
}