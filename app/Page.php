<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pages';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function indexes()
    {
        return Page::where('title', 'index')->get();
    }

    public static function nonindexes()
    {
        return $this->where('title', '!=', 'index')->get();
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
