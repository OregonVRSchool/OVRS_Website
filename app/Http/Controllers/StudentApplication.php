<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student\Application;
use App\Student\NewStudent;

class StudentApplication extends BaseController
{
   	public function __construct()
    {
      parent::__construct();
    }

    public function apply(Request $reqest)
    {
    	$application = new Application;
    	$application->user_id = Auth::user()->id;
    	$application->save();

    	return redirect()->route('application-student');
    }

}
