<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInformation extends FormRequest
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
            'preferredName' => 'required|max:50',
            'steamUsername' => 'required|max:50',
            'studentEmailAddress' => 'required|email|max:50',
            'studentHomePhone' => 'required|max:15',
            'studentCellPhone' => 'required|max:15',
            'studentAddress' => 'required|max:100',
            'studentCity' => 'required|max:50',
            'studentState' => 'required|max:50',
            'studentZip' => 'required|max:15',
            'studentCountry' => 'required|max:50',
            'studentGender' => 'required|max:15',
            'studentEthnicity' => 'required|max:15',
            'studentRace' => 'required|max:15',
            'studentLanguage' => 'required|max:15',
            'studentBirthCity' => 'required|max:50',
            'studentOtherLanguages' => 'required|max:50',
            'studentPicture' => 'nullable',
            'whoReferredUs' => 'nullable|max:50',
        ];
    }
}
