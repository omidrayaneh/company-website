<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    public function upload(Request $request)
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

        return response(['success'=>'حذف شد',$file,200]);

    }

    public function destroy($id)
    {
        $file = File::where('original_name',$id)->first();
        $image_path = public_path().$file->path;
        unlink($image_path);
        $file->delete();
        return response(['success'=>'حذف شد',200]);
    }
}
