<?php

namespace App\Http\Controllers;

use App\File;
use App\Repositories\Eloquent\UploadFileRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{

    /**
     * @var UploadFileRepository
     */
    private $uploadFile;

    public function __construct(UploadFileRepository $uploadFile)
    {
        $this->uploadFile = $uploadFile;
    }

    public function upload(Request $request)
    {
        $file = $this->uploadFile->upload($request);
        return response(['success'=>'فایل آپلود شد','file_id'=> $file->id ,200]);
    }

    public function destroy($id)
    {
        return response(['success'=>'حذف شد',200]);
    }
}
