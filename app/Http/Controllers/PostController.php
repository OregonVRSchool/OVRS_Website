<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Permissions;
use App\RequestPermissions;
use App\Student\Application;

class PostController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }
    
    public function apply(Request $request)
    {

        $permissionRequest = new RequestPermissions;
        $permissionRequest->user_id = Auth::user()->id;
        $permissionRequest->new_permissions_id = Permissions::where('title', $request['Position'])->first()->id;
    	$permissionRequest->save();

    	return redirect()->route('application-'.$request['Position']);
    }

    public function newStudent(Request $request)
    {
        $student = new Application;
        $student->user_id = Auth::user()->id;
        $student->first_name = $request['firstName'];
        $student->last_name = $request['lastName'];
        $student->year = $request['year'];
        $student->grade = $request['grade'];
        $student->save();

        $request->session()->put('applicant', ['id' => $student->id, 'firstName' => $student->first_name]);

        return redirect()->route('information.student.application');
    }


}
