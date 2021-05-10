<?php


namespace App\Repositories\Eloquent;


use App\Photo;
use App\Repositories\GalleryRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryRepository implements GalleryRepositoryInterface
{
    protected $gallery;

    /**
     * GalleryRepository constructor.
     * @param $gallery
     */
    public function __construct(Photo $gallery)
    {
        $this->gallery = $gallery;
    }


    public function all()
    {
    }

    public function allWithPaginate($page)
    {
        return Photo::where('type',1)->paginate($page);
    }
    public function allPostWithPaginate($page)
    {
        return Photo::where('type',0)->paginate($page);
    }

    public function create($request)
    {
        $uploadedFile = $request->file('file');
        $filename = time().$uploadedFile->getClientOriginalName();
        $original_name = $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs(
            'public/photos', $uploadedFile, $filename
        );

        $photo = new Photo();
        $photo->original_name = $original_name;
        $photo->path = $filename;
        $photo->type = 1;;
        $photo->user_id = auth()->id();
        $photo->save();

        return $photo;
    }

    public function delete($file_name)
    {

    }

    public function update($id, $request)
    {
        $photo = $this->findById($id);
        $photo->place = $request->place;
        $photo->detail = $request->detail;
        if ($request->input('status') == 'on')
            $photo->status = 1;
        else
            $photo->status = 0;
        if ($request->input('type') == 'on')
            $photo->type = 1;
        else
            $photo->type = 0;
        $photo->save();
        toast('تصویر ویرایش  شد', 'success');
    }

    public function findById($id)
    {
        return Photo::findOrFail($id);
    }
    public function findByFileName($file_name)
    {
        return Photo::where('original_name',$file_name)->first();
    }

    public function validator($request, $id)
    {
        $gallery= $this->findById($id);
        return $validator = Validator::make($request->all(), [
            'detail' => 'required',
            'place' => 'required',
        ], [
            'detail.required' => 'عنوان عکس  خالیست',
            'place.required' => 'مکان عکس  خالیست',
        ]);
    }
}
