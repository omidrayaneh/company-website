<?php


namespace App\Repositories;


interface FileRepositoryInterface
{
    public function all();

    public function findById($id);

    public function allWithPaginate($id,$page);

    public function create($request);

    public function update($request,$id);

    public function delete($id);

}
