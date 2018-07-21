<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Category;
use App\Page;
use App\Student\InformationPage;
use App\Student\InterestsPage;
use App\Student\SchoolsPage;
use App\Student\StrengthsNeedsPage;
use App\Student\HouseholdInformationPage;

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
        $applications = Auth::user()->applications;
        
        return view('layouts.applicationsStatus')->with('applications', $applications);
    }

    public function category($category, $page)
    {
        $page = Page::where('url', $page)->first();

        return view('layouts/page', ['page' => $page]);
    }

  

    public function role($role)
    {
    	return view('auth.register');
    }

    /* Get Student Applications */

    public function informationStudentApplication(Request $request, $id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->informationPage;
        if (is_null($page)) {
            $page = new InformationPage;
        }
        
        $buttons = [
            'back' => 'new.student.application',
            'save' => 'information.student.application',
            'next' => 'interests.student.application',        
        ];
        
        return view('partials.forms.applications.student.information', ['buttons' => $buttons, 'page' => $page]);
    }

    public function interestsStudentApplication($id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->interestsPage;
        if (is_null($page)) {
            $page = new InterestsPage;
        }

        $buttons = [
            'back' => 'information.student.application',
            'save' => 'interests.student.application',
            'next' => 'schools.student.application',        
        ];

        return view('partials.forms.applications.student.interests', ['buttons' => $buttons, 'page' => $page]);
    }

    public function schoolsStudentApplication($id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->schoolsPage;
        if (is_null($page)) {
            $page = new SchoolsPage;
            $page->iep = 'false';
        }

        $buttons = [
            'back' => 'interests.student.application',
            'save' => 'schools.student.application',
            'next' => 'abilities.student.application',        
        ];

        return view('partials.forms.applications.student.schools', ['buttons' => $buttons, 'page' => $page]);
    }

    public function abilitiesStudentApplication($id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->strengthsNeedsPage;
        if (is_null($page)) {
            $page = new StrengthsNeedsPage;
        }

        $buttons = [
            'back' => 'schools.student.application',
            'save' => 'abilities.student.application',
            'next' => 'household.student.application',        
        ];

        return view('partials.forms.applications.student.strengthsNeeds', ['buttons' => $buttons, 'page' => $page]);
    }

    public function householdStudentApplication($id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->householdInformationPages->first();
        
        if (is_null($page)) {
            $page = new HouseholdInformationPage;
            $page->financial_responsibility = 'true';
            $page->receive_corrispondence = 'true';
            $page->custodial_rights = 'true';
        }

        $buttons = [
            'back' => 'abilities.student.application',
            'save' => 'household.student.application',
            'next' => 'siblings.student.application',       
        ];

        return view('partials.forms.applications.student.householdInfo', ['buttons' => $buttons,  'page' => $page]);
    }

    public function siblingsStudentApplication()
    {
        $buttons = [
            'back' => 'household.student.application',
            'save' => 'siblings.student.application',
            'next' => 'parentQuestionair.student.application',        
        ];

        return view('partials.forms.applications.student.siblings', ['buttons' => $buttons]);
    }

    public function parentQuestionairStudentApplication()
    {
        $buttons = [
            'back' => 'siblings.student.application',
            'save' => 'parentQuestionair.student.application',
            'next' => 'studentQuestionair.student.application',        
        ];

        return view('partials.forms.applications.student.parentQuestionair', ['buttons' => $buttons]);
    }

    public function studentQuestionairStudentApplication()
    {
        $buttons = [
            'back' => 'parentQuestionair.student.application',
            'save' => 'studentQuestionair.student.application',
            'next' => 'recommendation.student.application',        
        ];

        return view('partials.forms.applications.student.studentQuestionair', ['buttons' => $buttons]);
    }

    public function recommendationStudentApplication()
    {
        $buttons = [
            'back' => 'studentQuestionair.student.application',
            'save' => 'recommendation.student.application',
            'next' => 'signature.student.application',        
        ];

        return view('partials.forms.applications.student.recommendation', ['buttons' => $buttons]);
    }

    public function signatureStudentApplication()
    {
        $buttons = [
            'back' => 'recommendation.student.application',
            'save' => 'signature.student.application',
            'next' => 'submit.student.application',        
        ];

        return view('partials.forms.applications.student.electronicSignature', ['buttons' => $buttons]);
    }

    public function test()
    {
        return view('partials.forms.applications.student.electronicSignature');
    }
}
