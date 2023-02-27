<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
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
            'gender'                    =>'required',
            'name'                      =>'required|max:30',
            'user_location'             =>'required',
            'language'                  =>'required',
            'experties'                 =>'required',
            'price_for_one'             =>'required',
            'location'                  =>'required',
            'free_trial'                =>'required',
        ];
    }
}
