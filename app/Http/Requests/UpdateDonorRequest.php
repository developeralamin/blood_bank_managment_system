<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDonorRequest extends FormRequest
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
            'name'                     => 'required',
            'gender'                   => 'required',
            'age'                      => 'required',
            'phone'                    => 'required|numeric',
            'email'                    => 'required|email',
            'blood_group_id'           => 'required',
        ];
    }
}
