<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentAbilitiesValidator;
use App\Student\StrengthsNeedsPage;

class AbilitiesController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
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

    public function updateAbilities(StudentAbilitiesValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = StrengthsNeedsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'strengths' => $inputs["studentStrengths"],
                'needs' => $inputs["studentNeeds"],
                'disability' => $inputs["learningDisability"],
            ]
        );

        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
