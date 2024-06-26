<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use App\Repositories\Eloquent\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    protected $gallery;

    /**
     * GalleryController constructor.
     * @param $gallery
     */
    public function __construct(GalleryRepository $gallery)
    {
        $this->gallery = $gallery;
    }


    public function index()
    {
        $photos = $this->gallery->allWithPaginate(10);
        return view('admin.galleries.index', compact(['photos']));
    }
    public function post_index()
    {
        $photos = $this->gallery->allPostWithPaginate(10);
        return view('admin.galleries.index', compact(['photos']));
    }


    public function create()
    {
        $photos = Photo::all();
        return view('admin.galleries.create',compact(['photos']));
    }


    public function store(Request $request)
    {
        $photoId = $this->gallery->create($request);
      return  response()->json([
            'photo_id' => $photoId
        ]);
    }


    public function show($id)
    {
        $photo = $this->gallery->findById($id);
        return response(['photo'=> $photo],200);
    }


    public function edit($id)
    {
        $photo = $this->gallery->findById($id);
        return view('admin.galleries.edit',compact(['photo']));
    }


    public function update(Request $request, $id)
    {
        $this->gallery->update($id,$request);
        if ($request->input('type'))
            return redirect('admin/galleries');
        return redirect('admin/post-galleries');
    }


    public function destroy($id)//for all photo index page
    {
        $photo = $this->gallery->findById($id);
        $image_path = public_path().$photo->path;
        unlink($image_path);
        $photo->delete($image_path);
        return response(['success'=>'حذف شد',200]);
    }
    public function delete($name)//for dropzone in create or edit page
    {
        $photo = $this->gallery->findByFileName($name);
        $image_path = public_path().$photo->path;
        unlink($image_path);
        $photo->delete($image_path);
        return response(['success'=>'حذف شد',200]);
    }
}
