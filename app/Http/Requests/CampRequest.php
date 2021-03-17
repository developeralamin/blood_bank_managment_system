<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CampRequest extends FormRequest
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
           'camp_title'       => 'required',
           'state_id'         => 'required',
           'city_id'          => 'required',
           'organized_by'     => 'required',
           'details'          => 'required',
        ];
    }
}
