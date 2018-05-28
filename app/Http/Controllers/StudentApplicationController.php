<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student\Application;

class StudentApplicationController extends BaseController
{
   	public function __construct()
    {
      parent::__construct();
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
