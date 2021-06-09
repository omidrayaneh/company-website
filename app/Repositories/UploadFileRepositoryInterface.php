<?php

namespace App\Repositories;

interface UploadFileRepositoryInterface
{
    public function upload($request);

    public function delete($id);
}
