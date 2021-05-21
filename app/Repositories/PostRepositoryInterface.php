<?php


namespace App\Repositories;


interface PostRepositoryInterface
{
    public function all();

    public function allWithPaginate($page);

    public function findBySlugWithRelation($page);

    public function findByMenu($id);

    public function findByPost($slug);

    public function create($request);

    public function delete($slug);

    public function update($request,$slug);

    public function findById($id);

    public function findBySlug($slug);

}
