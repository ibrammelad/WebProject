<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeMeDoctorRequest extends FormRequest
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
            'from' => 'required',
            'to' => 'required',
            'lang' => 'required|numeric',
            'lat' => 'required|numeric',
            'salary' => 'required|numeric',
            'services' => 'required',
            'qualifications' => 'required',
            'img' => 'required|mimes:jpg,jpeg,png',
        ];
    }

    public function messages()
    {
        return [
            'from.required' => ('messages.doctor time from required'),
            'to.required' => ('messages.doctor time to required'),
            'lang.required' => ('messages.doctor lang required'),
            'lat.required' => ('messages.doctor lat required'),
            'salary.required' => ('messages.doctor salary required'),
            'qualifications.required' => ('messages.doctor qualifications required'),
            'img.required' => ('messages.doctor medical identife required'),
            'lang.numeric' => ('messages.doctor lang must be numeric'),
            'lat.numeric' => ('messages.doctor lat must be numeric'),
            'salary.numeric' => ('messages.doctor salary must be numeric'),
        ]; // TODO: Change the autogenerated stub
    }
}