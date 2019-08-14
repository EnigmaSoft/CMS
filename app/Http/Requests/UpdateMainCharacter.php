<?php

namespace App\Http\Requests;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMainCharacter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'character' => 'required|alpha_num|min:3|max:13|exists:characters,name'
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'character.required' => 'You must select a Character as your Main!',
            'character.alpha_num' => 'Your Character\'s name may consists of letters and numbers only!',
            'character.min' => 'Your Character\'s name cannot be shorter than 3 characters!',
            'character.max' => 'Your Character\'s name cannot be longer than 13 characters!',
        ];
    }
}
