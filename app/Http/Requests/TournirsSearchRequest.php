<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournirsSearchRequest extends FormRequest
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
            'name' => 'required|min:3|max:60',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название турнира является обязательным',
            'name.min' => 'Название турнира должно содержать минимум 3 символа',
            'name.max' => 'Название турнира должно содержать максимум 30 символов',
        ];
    }
}
