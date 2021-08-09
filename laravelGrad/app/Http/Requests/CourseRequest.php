<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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

    public function rules()
    {
        return [
            'c_name' => 'required',
            'C_description' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'c_name.unique' => 'please choose Project Name This one IS already taken @_@',
            'C_description.required' => 'descprition is required ...!'
        ];
    }
}
