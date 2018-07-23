<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentQuestionairValidator;
use App\Student\StudentQuestionairPage;

class StudentQuestionairController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function studentQuestionairStudentApplication($id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->studentQuestionairPage;
        if (is_null($page)) {
            $page = new StudentQuestionairPage;
        }

        $buttons = [
            'back' => 'parentQuestionair.student.application',
            'save' => 'studentQuestionair.student.application',
            'next' => 'recommendation.student.application',        
        ];

        return view('partials.forms.applications.student.studentQuestionair', ['buttons' => $buttons, 'page' => $page]);
    }

    public function updateStudentQuestionair(StudentQuestionairValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = StudentQuestionairPage::updateOrCreate(
            ['application_id' => $id],
            [
                'question_one' => $inputs['questionOne'],
                'question_two' => $inputs['questionTwo'],
                'question_three' => $inputs['questionThree'],
            ]
        );

        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
