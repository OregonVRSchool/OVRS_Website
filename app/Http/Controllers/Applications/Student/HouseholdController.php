<?php

namespace App\Http\Controllers\Applications\Student;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;
use App\Http\Requests\StudentHouseholdValidator;
use App\Student\HouseholdInformationPage;

class HouseholdController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function householdStudentApplication(Request $request, $id)
    {
        $page = $request->get('application')->householdInformationPages->first();
        
        if (is_null($page)) {
            $page = new HouseholdInformationPage;
            $page->financial_responsibility = 'true';
            $page->receive_corrispondence = 'true';
            $page->custodial_rights = 'true';
        }

        $buttons = [
            'back' => 'abilities.student.application',
            'save' => 'household.student.application',
            'next' => 'siblings.student.application',       
        ];

        return view('partials.forms.applications.student.householdInfo', ['buttons' => $buttons,  'page' => $page]);
    }

    public function updateHousehold(StudentHouseholdValidator $request, $id)
    {
        $inputs = $request->validated();

        $Page = $request->get('application')->householdInformationPages()->updateOrCreate(
            [
                'first_name' => $inputs['firstName'],
                'middle_name' => $inputs['middleName'],
                'last_name' => $inputs['lastName'],
                'suffix' => $inputs['suffix'],
                'salutation' => $inputs['salutation'],
                'preferred_name' => $inputs['preferredName'],
                'gender' => $inputs['gender'],
                'relationship' => $inputs['studentRelationship'],
                'marital_status' => $inputs['maritalStatus'],
                'financial_responsibility' => $inputs['financialResponsibility'],
                'recieve_correspondence' => $inputs['receiveCorrespondence'],
                'custodial_rights' => $inputs['custodialRights'],
                'email' => $inputs['emailAddress'],
                'work_phone' => $inputs['workPhone'],
                'home_phone' => $inputs['homePhone'],
                'cell_phone' => $inputs['cellPhone'],
                'occupation' => $inputs['occupation'],
                'employer' => $inputs['employer'],
                'employer_address' => $inputs['employerAddress'],
                'employer_city' => $inputs['employerCity'],
                'employer_state' => $inputs['employerState'],
                'employer_zip' => $inputs['employerZip'],
            ]
        );
        return redirect()->route($request['submit'], ['id' => $id]);
    }
}
