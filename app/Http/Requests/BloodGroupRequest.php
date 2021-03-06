<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BloodGroupRequest extends FormRequest
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
            'blood_name'     => 'required',
            'give_blood'     => 'required',
            'receive_blood'  => 'required',

        ];
    }
}
