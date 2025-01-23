<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if(!function_exists('upload_file')){
    /**
     * @param \illuminate\http\UploadedFile $file
     * @param string $directory
     * @return void
     */
    function upload_file($file, $directory){
        $extension = $file->getClientOriginalExtension();
        $fileName = Str::uuid() . '.' . $extension;

        // disk disini di dapat dari .env
        // from local to public
        Storage::disk('public')->putFileAs($directory, $file, $fileName);

        return "/storage/$directory/$fileName";
    }
}

if(!function_exists('remove_file')){
    /**
     * @param string $filePath
     * @return void
     */
    function remove_file($filePath){
        if($filePath && Storage::disk('public')->exists($filePath)){
            return Storage::disk('public')->delete($filePath);
        }

        return false;
    }
}

?>
