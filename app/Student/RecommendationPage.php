<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class RecommendationPage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recommendation';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function application()
    {
    	return $this->belongsTo('App\Student\Application');
    }
}
