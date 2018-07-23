<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentInformation;
use App\Student\InformationPage;

class InformationController extends BaseController
{
    public function __construct()
    {
      parent::__construct();
    }

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

    public function updateInformation(StudentInformation $request, $id)
    {
        
        $inputs = $request->validated();
        
        $Page = InformationPage::updateOrCreate(
            ['application_id' => $id],
            [
                'preferred_name' => $inputs["preferredName"], 
                'steam_username' => $inputs["steamUsername"], 
                'email' => $inputs["studentEmailAddress"], 
                'home_phone' => $inputs["studentHomePhone"], 
                'cell_phone' => $inputs["studentCellPhone"], 
                'address' => $inputs["studentAddress"], 
                'city' => $inputs["studentCity"],
                'state' => $inputs["studentState"], 
                'zip' => $inputs["studentZip"], 
                'country' => $inputs["studentCountry"], 
                'gender' => $inputs["studentGender"], 
                'ethnicity' => $inputs["studentEthnicity"], 
                'race' => $inputs["studentRace"], 
                'language' => $inputs["studentLanguage"], 
                'other_languages' => $inputs["studentOtherLanguages"], 
                'birth_city' => $inputs["studentBirthCity"], 
                'referred_by' => $inputs["whoReferredUs"], 
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
