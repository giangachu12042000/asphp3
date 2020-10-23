<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes()
    {
        return [
            'content'=>'Nội dung'
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
            'content'=>'required|min:10|max:100'
         ];
    }
    public function messages()
    {
        return[
            'required'=>':attribute không được để trống',
            'min'=>':attribute độ dài tối thiểu 10 kí tự',
            'max'=>':attribute độ dài tối đa 100 kí tự'
        ];
    }
}
