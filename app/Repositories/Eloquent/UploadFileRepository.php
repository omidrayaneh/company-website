<?php

namespace App\Repositories\Eloquent;
use App\File;
use App\Http\Requests\UserRequest;
use App\Repositories\UploadFileRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UploadFileRepository implements UploadFileRepositoryInterface
{


    public function upload($request)
    {

       $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();
        $original_name = $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/files', $uploadedFile, $filename
        );

        $file = new File();
        $file->original_name = $original_name;
        $file->path = $filename;
        $file->user_id = auth()->id();
        $file->save();

        return $file;

    }

    public function delete($id)
    {
        $file = File::where('original_name',$id)->first();
        $image_path = public_path().$file->path;
        unlink($image_path);
        $file->delete();
    }
}
