<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }
    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }
}
