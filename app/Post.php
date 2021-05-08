<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * use slug instead of id
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public static function makeSlug($string)
    {
        return preg_replace('/\s+/u', '-', trim($string));
    }
    public static function generateSKU()
    {
        $number = 'KC-'.mt_rand(1000, 99999);
        if (Post::checkSKU($number)) {
            return Post::generateSKU();
        }
        return (string)$number;
    }
    public static function checkSKU($number)
    {
        return Post::where('sku',$number)->exists();
    }
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
