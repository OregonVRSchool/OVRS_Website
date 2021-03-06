<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentRecommendationValidator;
use App\Student\RecommendationPage;

class RecommendationController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    } 

    public function recommendationStudentApplication(Request $request, $id)
    {
        $page = $request->get('application')->recommendationPage;
        if (is_null($page)) {
            $page = new RecommendationPage;
        }

        $buttons = [
            'back' => 'studentQuestionair.student.application',
            'save' => 'recommendation.student.application',
            'next' => 'signature.student.application',        
        ];

        return view('partials.forms.applications.student.recommendation', ['buttons' => $buttons, 'page' => $page]);
    } 

    public function updateRecommendation(StudentRecommendationValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = $request->get('application')->recommendationPage()->updateOrCreate(
            [
                'name' => $inputs['refferalName'],
                'email' => $inputs['refferalEmail'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
