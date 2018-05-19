<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestPermissions extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permissions_request';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
