<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Page;

class GetController extends BaseController
{
	public function __construct()
    {
      parent::__construct();
    }

    public function index()
    {
        return view('welcome');
    }
    
    public function apply()
    {
    	return view('partials.forms.apply');
    }

    public function applications()
    {
        return view('layouts.applicationsStatus');
    }

    public function category($category, $page)
    {
        $page = Page::where('url', $page)->first();

        return view('layouts/page', ['page' => $page]);
    }

    public function newStudent()
    {
        return view('partials.forms.applications.student.new');
    }

    public function role($role)
    {
    	return view('auth.register');
    }

    /* Student Applications */

    public function informationStudentApplication()
    {
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

    public function test()
    {
        return view('partials.forms.applications.student.electronicSignature');
    }
}
