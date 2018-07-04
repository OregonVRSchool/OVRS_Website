<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StudentInformation;
use App\Http\Requests\StudentInterestsValidator;
use App\Http\Requests\StudentSchoolValidator;
use App\Http\Requests\StudentAbilitiesValidator;
use App\Http\Requests\StudentHouseholdValidator;
use App\Http\Requests\StudentSiblingsValidator;
use App\Student\Application;
use App\Student\Student;

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
        // $application->first_name = $request['firstName'];
        // $application->last_name = $request['lastName'];
        // $application->year = $request['year'];
        // $application->grade = $request['grade'];
        $application->save();

        // $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);
        // dd($application->id);

        return redirect()->route('new.student.application', ['id' => $application->id]);
    }

    public function editStudent(Request $request, $id)
    {
        $application = Auth::user()->applications->find($id);
        $request->session()->put('applicant', ['id' => $application->id, 'firstName' => $application->first_name]);

        $buttons = [
            'back' => 'new.student.application',
            'save' => 'new.student.application',
            'next' => 'information.student.application',        
        ];

        return view('partials.forms.applications.student.new', ['application' => $application, 'buttons' => $buttons]);
    }

    public function updateStudent(Request $request, $id)
    {
        $application = Auth::user()->applications->find($id);
        $student = Student::firstOrNew(['applications_id'=> $application->id]);
        $student->first_name = $request['firstName'];
        $student->last_name = $request['lastName'];
        $student->year = $request['year'];
        $student->grade = $request['grade'];
        $student->save();

        $request->session()->put('applicant', ['id' => $application->student->id, 'firstName' => $application->student->first_name]);

        return redirect()->route('information.student.application', ['id' => $application->id]);
    }

    public function updateInformation(StudentInformation $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateInterests(StudentInterestsValidator $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSchools(StudentSchoolValidator $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateAbilities(StudentAbilitiesValidator $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateHousehold(StudentHouseholdValidator $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSiblings(StudentSiblingsValidator $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateParentQuestionair(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateStudentQuestionair(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateRecommendation(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function updateSignature(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function deleteStudent($id)
    {
        $application = Auth::user()->applications->find(intval($id));
        $application->delete();

        return redirect()->route('applications');
    }

}
