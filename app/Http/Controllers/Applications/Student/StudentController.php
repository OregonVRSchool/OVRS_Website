<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Student\Application;
use App\Http\Requests\StudentValidator;
use App\Student\Student;

class StudentController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }

    public function newStudent(Request $request)
    {
        $application = new Application;
        $student = new Student;

        $application = Auth::user()->applications()->save($application);
        $application->student()->save($student);

        return redirect()->route('student.application', ['id' => $application->id]);
    }

    public function editStudent(Request $request, $id)
    {
        $application = Auth::user()->applications->find($id);

        if (is_null($application)) {
            return redirect()->route('applications');
        }

        $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);

        $buttons = [
            'back' => 'new.student.application',
            'save' => 'new.student.application',
            'next' => 'information.student.application',        
        ];

        return view('partials.forms.applications.student.new', ['application' => $application, 'buttons' => $buttons]);
    }

    public function updateStudent(StudentValidator $request, $id)
    {
        $inputs = $request->validated();
        $application =Auth::user()->applications->find($id);

        $student = $application->student;
        $student->first_name = $inputs['firstName'];
        $student->last_name = $inputs['lastName'];
        $student->year = $inputs['year'];
        $student->grade = $inputs['grade'];
        $student->save();

        $request->session()->put('applicant', ['id' => $application->student->id, 'firstName' => $application->student->first_name]);

        return redirect()->route('information.student.application', ['id' => $application->id]);
    }

    public function deleteStudent($id)
    {
        $application = Auth::user()->applications->find(intval($id));
        $application->delete();

        return redirect()->route('applications');
    }
}
