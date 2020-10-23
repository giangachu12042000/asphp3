<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes()
    {

        return [
            'name'=>'Tên'
        ];

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'name'=>'required|min:5|max:100'
        ];
    }
    public function messages()
    {
        return[
            'required'=>':attribute không được để trống',
            'min'=>':attribute tối thiểu 5 kí tự',
            'max'=>':attribute tối đa 100 kí tự',
        ];
    }
}
