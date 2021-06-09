<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $uploads = '/storage/files/';

    public function getPathAttribute($file)
    {
        return $this->uploads . $file;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
