<?php

namespace App\Repositories;

interface ContactRepositoryInterface
{
    public function all();

    public function findByStatus();

    public function findById($id);

    public function allWithPaginate($page);

    public function create($request);

    public function update($request,$id);


    public function delete($id);

    public function markAsRead($request);

    public function markAsRead_contact($request);
}
