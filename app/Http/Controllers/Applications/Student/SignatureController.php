<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

class SignatureController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
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

    public function updateSignature(Request $request, $id)
    {
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
