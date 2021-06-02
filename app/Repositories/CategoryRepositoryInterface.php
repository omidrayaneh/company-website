<?php

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    public function all();

    public function allActive();

    public function findById($id);

    public function allWithPaginate($page);

    public function create($request);

    public function update($request,$id);

    public function delete($id);
}
