<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesAddRequest extends FormRequest
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
            'game_name' => 'required|min:3|max:30',
            'dev_name' => 'required|min:3|max:30',
            'year' => 'required',
            'platforms' => 'required|min:2|max:100',
        ];
    }

    public function messages()
    {
        return[
            'game_name.required' => 'Название игры является обязательным',
            'game_name.min' => 'Название игры должно содержать минимум 3 символа',
            'game_name.max' => 'Название игры должно содержать максимум 30 символов',

            'dev_name.required' => 'Название компании-производителя является обязательным',
            'dev_name.min' => 'Название компании-производителя должно содержать минимум 3 символа',
            'dev_name.max' => 'Название компании-производителя должно содержать максимум 30 символов',

            'year.required' => 'Год релиза является обязательным',

            'platforms.required' => 'Список платформ является обязательным',
            'platforms.min' => 'Список платформ должен содержать минимум 2 символа',
            'platforms.max' => 'Список платформ должен содержать максимум 30 символов',

        ];
    }


}
