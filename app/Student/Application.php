<?php

namespace App\Student;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'applications';

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

    public function student()
    {
        return $this->hasOne('App\Student\Student', 'applications_id', 'id');
    }

    public function informationPage()
    {
        return $this->hasOne('App\Student\InformationPage');
    }

    public function schoolsPage()
    {
        return $this->hasOne('App\Student\SchoolsPage');
    }
}
