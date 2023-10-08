<?php

namespace App\Traits;

use Illuminate\Http\Request;
use File;

trait FileUploadTrait
{
    function uploadImage(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads') : ?string
    {
        if($request->hasFile($inputName)){
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid(). '.' . $ext;

            $image->move(public_path($path), $imageName);

            // Delete previous image from storage
            $exculudedFolder = '/default';

            if($oldPath && File::exists(public_path($oldPath)) && strpos($oldPath, $exculudedFolder) !== 0){
                File::delete(public_path($oldPath));
            }

            return $path . '/' . $imageName;
        }

        return null;
    }
}
