<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentHouseholdValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required|max:50',
            'middleName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'suffix' => 'required|max:15',
            'salutation' => 'required|max:15',
            'preferredName' => 'required|max:50',
            'gender' => 'required|max:10',
            'studentRelationship' => 'required|max:15',
            'maritalStatus' => 'required|max:15',
            'financialResponsibility' => 'required|boolean',
            'receiveCorrispondence' => 'required|boolean',
            'custodialRights' => 'required|boolean',
            'emailAddress' => 'required|email|max:50',
            'workPhone' => 'required|max:15',
            'homePhone' => 'required|max:15',
            'cellPhone' => 'required|max:15',
            'occupation' => 'required|max:50',
            'employer' => 'required|max:50',
            'employerAddress' => 'required|max:100',
            'employerCity' => 'required|max:50',
            'employerState' => 'required|max:50',
            'employerZip' => 'required|max:15',
            
        ];
    }
}
