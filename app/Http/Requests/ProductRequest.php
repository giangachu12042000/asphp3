<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'image_url' => 'Ảnh đại diện',
            'price' => 'Giá'
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required | max:20 | min:2',
            'category_id' => 'required',
            'image_url' => 'image | required',
            'price' => 'required',
            'sale_percent' => 'required',
            'stocks' => 'required',
            'is_active' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng',
            'max' => ':attribute độ dài tối đa không vượt quá 20 ký tự',
            'min' => ':attribute độ dài tối thiểu là 2 ký tự'
        ];
    }
}
