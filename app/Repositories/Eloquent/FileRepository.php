<?php


namespace App\Repositories\Eloquent;


use App\File;
use App\Repositories\FileRepositoryInterface;

class FileRepository implements FileRepositoryInterface
{

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function findById($id)
    {
        return File::findOrFail($id);
    }

    public function allWithPaginate($id, $page)
    {
        return File::with('user')->where('user_id', $id)->paginate(10);

    }

    public function create($request)
    {
        // TODO: Implement create() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        $file = $this->findById($id);
        $image_path = public_path() . $file->path;
        unlink($image_path);
        $file->delete();

    }
}
