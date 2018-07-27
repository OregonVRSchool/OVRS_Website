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
            'firstName' => 'required_if:hasSiblings, ==, 1|max:50',
            'lastName' => 'required_if:hasSiblings, ==, 1|max:50',
            'userName' => 'required_if:hasSiblings, ==, 1|max:50',
            'studentID' => 'required_if:hasSiblings, ==, 1|numeric|max:10|nullable',
            'relationship' => 'required_if:hasSiblings, ==, 1|max:50',
            'yearsAttended' => 'required_if:hasSiblings, ==, 1|max:15',
        ];
    }

    
}
