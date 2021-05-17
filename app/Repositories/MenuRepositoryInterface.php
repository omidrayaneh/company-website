<?php


namespace App\Repositories;


interface MenuRepositoryInterface
{
    public function all();

    public function allWithPaginate($page);

    public function allWithOutPagination();

    public function create($request);

    public function delete($slug);

    public function update($request,$slug);

    public function findById($id);

    public function getPostWithMenuId($id);

    public function findBySlug($slug);

}
