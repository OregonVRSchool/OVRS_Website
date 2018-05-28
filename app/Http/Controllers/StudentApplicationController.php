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

    /* Get Student Applications */

    public function informationStudentApplication(Request $request)
    {
        // dd(session('applicant')['firstName']);
        return view('partials.forms.applications.student.information');
    }

    public function interestsStudentApplication()
    {
        return view('partials.forms.applications.student.interests');
    }

    public function schoolsStudentApplication()
    {
        return view('partials.forms.applications.student.schools');
    }

    public function abilitiesStudentApplication()
    {
        return view('partials.forms.applications.student.strengthsNeeds');
    }

    public function householdStudentApplication()
    {
        return view('partials.forms.applications.student.householdInfo');
    }

    public function siblingsStudentApplication()
    {
        return view('partials.forms.applications.student.siblings');
    }

    public function parentQuestionairStudentApplication()
    {
        return view('partials.forms.applications.student.parentQuestionair');
    }

    public function studentQuestionairStudentApplication()
    {
        return view('partials.forms.applications.student.studentQuestionair');
    }

    public function recommendationStudentApplication()
    {
        return view('partials.forms.applications.student.recommendation');
    }

    public function signatureStudentApplication()
    {
        return view('partials.forms.applications.student.electronicSignature');
    }

}
