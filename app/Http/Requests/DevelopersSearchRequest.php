<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevelopersSearchRequest extends FormRequest
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
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Название игры является обязательным',
            'name.min' => 'Название игры должно содержать минимум 3 символа',
            'name.max' => 'Название игры должно содержать максимум 30 символов',
        ];
    }
}
