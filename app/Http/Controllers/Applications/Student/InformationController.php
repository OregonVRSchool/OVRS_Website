<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentInformation;
use App\Student\InformationPage;
use App\Picture;

class InformationController extends BaseController
{
    public function __construct()
    {
      parent::__construct();
    }

    public function informationStudentApplication(Request $request, $id)
    {
        $page = Auth::user()->applications->where('id', $id)->first()->informationPage;
        if (isset($page->picture_id)) {

            $page->file = Auth::user()->pictures->find($page->picture_id);
            
            // echo '<img src="data:image/jpeg;base64,'.$page->picture->picture.'"/>';
        }
        if (is_null($page)) {
            $page = new InformationPage;
            // $page->file = new Picture;
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
        $page = Auth::user()->applications->where('id', $id)->first()->informationPage()->firstOrNew(
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

        if (isset($inputs['file'])) {
            $picture = new Picture;
            
            $picture->name = $inputs['file']->getClientOriginalName();
            $picture->content = base64_encode(file_get_contents($inputs['file']->path()));
            $picture = Auth::user()->pictures()->save($picture);
            $inputs['file'] = $picture->id;
            $page->picture_id = $inputs['file'];
        } 

        $page->save();

        return redirect()->route($request['submit'], ['id' => $id]);
    }

    public function deleteFile(Request $request, $id)
    {
        $page = Auth::user()->applications()->find($id)->informationPage;
        $page->picture_id = null;
        $page->save();
        $photo = Auth::user()->pictures()->find($request->id);
        $photo->delete();
        return response()->json(['response' => 'photo deleted']);
    }
}
