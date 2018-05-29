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
        $application = new Application;
        $application->user_id = Auth::user()->id;
        $application->first_name = $request['firstName'];
        $application->last_name = $request['lastName'];
        $application->year = $request['year'];
        $application->grade = $request['grade'];
        $application->save();

        $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);

        return redirect()->route('information.student.application');
    }

    public function editStudent($id)
    {
        $application = Auth::user()->applications->find($id);

        $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);

        return redirect()->route('application-student', ['application' => $application]);
    }

    public function deleteStudent($id)
    {
        $application = Auth::user()->applications->find(intval($id));
        $application->delete();

        return redirect()->route('applications');
    }

}
