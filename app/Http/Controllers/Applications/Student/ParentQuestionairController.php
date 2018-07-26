<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\ParentQuestionairValidator;
use App\Student\ParentQuestionairPage;

class ParentQuestionairController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function parentQuestionairStudentApplication(Request $request, $id)
    {
        $page = $request->get('application')->parentQuestionairPage;
        if (is_null($page)) {
            $page = new ParentQuestionairPage;
        }

        $buttons = [
            'back' => 'siblings.student.application',
            'save' => 'parentQuestionair.student.application',
            'next' => 'studentQuestionair.student.application',        
        ];

        return view('partials.forms.applications.student.parentQuestionair', ['buttons' => $buttons, 'page' => $page]);
    }

    public function updateParentQuestionair(ParentQuestionairValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = $request->get('application')->parentQuestionairPage()->updateOrCreate(
            [
                'question_one' => $inputs['questionOne'],
                'question_two' => $inputs['questionTwo'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
