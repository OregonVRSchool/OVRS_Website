<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function DropdownList()
    {
        $categories = Category::all();
        $dropdownlist = [];
        foreach ($categories as $category) {
            $dropdownlist[$category->id] = $category->title;
        }
        return $dropdownlist;
    }
}
