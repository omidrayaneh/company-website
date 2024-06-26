<?php


namespace App\Repositories;


interface GalleryRepositoryInterface
{
    public function all();

    public function allWithPaginate($page);

    public function allPostWithPaginate($page);

    public function getBanner($place);

    public function getAllBanner($place);

    public function create($request);

    public function delete($file_name);

    public function update($id,$request);

    public function findById($id);

    public function findByFileName($file_name);

}
