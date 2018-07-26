<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentSiblingsValidator;
use App\Student\SiblingsPage;


class SiblingsController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function siblingsStudentApplication(Request $request, $id)
    {
        $page = $request->get('application')->siblingsPages->first();
        if (is_null($page)) {
            $page = new SiblingsPage;
        }

        $buttons = [
            'back' => 'household.student.application',
            'save' => 'siblings.student.application',
            'next' => 'parentQuestionair.student.application',        
        ];

        return view('partials.forms.applications.student.siblings', ['buttons' => $buttons, 'page' => $page]);
    }

    public function updateSiblings(StudentSiblingsValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = $request->get('application')->siblingsPages()->updateOrCreate(
            [
                'first_name' => $inputs['firstName'],
                'last_name' => $inputs['lastName'],
                'username' => $inputs['userName'],
                'student_id' => $inputs['studentID'],
                'relationship' => $inputs['relationship'],
                'years_attended' => $inputs['yearsAttended'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
