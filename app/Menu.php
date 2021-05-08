<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
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
        if (Menu::checkSKU($number)) {
            return Menu::generateSKU();
        }
        return (string)$number;
    }

    public function posts()
    {
        $this->belongsTo(Post::class);
    }
    public static function checkSKU($number)
    {
        return Menu::where('sku',$number)->exists();
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

}
