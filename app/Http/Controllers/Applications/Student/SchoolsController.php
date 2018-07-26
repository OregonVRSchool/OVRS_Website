<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentSchoolValidator;
use App\Student\SchoolsPage;

class SchoolsController extends BaseController
{
   	public function __construct()
    {
      parent::__construct();
    }

	public function schoolsStudentApplication(Request $request, $id)
    {
        $page = $request->get('application')->schoolsPage;
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

    public function updateSchools(StudentSchoolValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = $request->get('application')->schoolsPage()->updateOrCreate(
            
            [
                'name' => $inputs['schoolName'],
                'address' => $inputs['address'],
                'phone' => $inputs['phone'],
                'from_date' => $inputs['fromDate'],
                'to_date' => $inputs['toDate'],
                'grade_completed' => $inputs['gradeCompleted'],
                'math_teacher' => $inputs['mathTeacher'],
                'english_teacher' => $inputs['englishTeacher'],
                'computer_teacher' => $inputs['computerTeacher'],
                'expelled' => $inputs['expelled'],
                'suspended' => $inputs['suspended'],
                'skipped' => $inputs['skippedGrade'],
                'iep' => $inputs['iep'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
