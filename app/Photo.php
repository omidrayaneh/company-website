<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $uploads = '/storage/photos/';

    public function getPathAttribute($photo)
    {
        return $this->uploads . $photo;
    }
}
