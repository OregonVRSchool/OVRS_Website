<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSiblingsValidator extends FormRequest
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
            'hasSiblings' => 'required|boolean',
            'firstName' => 'required|max:50',
            'lastName' => 'required|max:50',
            'userName' => 'required|max:50',
            'studentID' => 'required|numeric|max:10',
            'relationship' => 'required|max:50',
            'yearsAttended' => 'required|max:15',
        ];
    }
}
