<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSchoolValidator extends FormRequest
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
            'schoolName' => 'required|max:50',
            'address' => 'required|max:50',
            'phone' => 'required|max:15',
            'fromDate' => 'required|date',
            'toDate' => 'required|date',
            'gradeCompleted' => 'required|max:15',
            'mathTeacher' => 'required|max:50',
            'englishTeacher' => 'required|max:50',
            'computerTeacher' => 'required|max:50',
            'expelled' => 'required|max:250',
            'suspended' => 'required|max:250',
            'skippedGrade' => 'required|max:250',
            'iep' => 'required',
        ];
    }
}
