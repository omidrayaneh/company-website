<?php

namespace App\Repositories;

interface MetaRepositoryInterface
{
    public function all();

    public function findById($id);

    public function allWithPaginate($number);

    public function create($request);

    public function update($request,$id);

    public function delete($id);
}
