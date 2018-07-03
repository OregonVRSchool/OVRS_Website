<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInterestsValidator extends FormRequest
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
            'sports' => 'required|max:50',
            'activities' => 'required|max:50',
            'performingArts' => 'required|max:50',
            'instruments' => 'required|max:50',
            'computerSkills' => 'required|max:50',
            'typingSpeed' => 'required|max:15',
            'awards' => 'required|max:250',
        ];
    }
}
