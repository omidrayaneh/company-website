<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'ticket_id', 'user_id', 'comment','user_type','file_id'
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
