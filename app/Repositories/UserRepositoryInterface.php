<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function all();

    public function findById($id);

    public function allWithPaginate($number);

    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
