<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevelopersAddRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'president' => 'required|min:3|max:30',
            'year_of_creation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название компании является обязательным',
            'name.min' => 'Название компании должно содержать минимум 3 символа',
            'name.max' => 'Название компании должно содержать максимум 30 символов',

            'president.required' => 'Название компании является обязательным',
            'president.min' => 'Название компании должно содержать минимум 3 символа',
            'president.max' => 'Название компании должно содержать максимум 30 символов',

            'year_of_creation.required' => 'Год создания является обязательным',
        ];
    }
}
