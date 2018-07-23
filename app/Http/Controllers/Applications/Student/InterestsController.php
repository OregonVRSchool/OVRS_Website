<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentInterestsValidator;
use App\Student\InterestsPage;

class InterestsController extends BaseController
{
    public function __construct()
    {
      parent::__construct();
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

    public function updateInterests(StudentInterestsValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = InterestsPage::updateOrCreate(
            ['application_id' => $id],
            [
                'sports' => $inputs["sports"],
                'activities' => $inputs["activities"],
                'performing_arts' => $inputs["performingArts"],
                'instruments' => $inputs["instruments"],
                'computer_skills' => $inputs["computerSkills"],
                'typing_speed' => $inputs["typingSpeed"],
                'awards' => $inputs["awards"],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
