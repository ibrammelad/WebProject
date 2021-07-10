<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeMeNurseRequest extends FormRequest
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
            'salary'=>'required|numeric',
            'services'=>'required',
            'qualifications'=>'required',
            'from'=>'required|numeric',
            'to'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'from.required' => ('messages.nurse time from required'),
            'to.required' => ('messages.nurse time to required'),
            'salary.required' => ('messages.nurse salary required'),
            'qualifications.required' => ('messages.nurse qualifications required'),
            'salary.numeric' => ('messages.doctor nurse must be numeric'),
        ];
    }
}
