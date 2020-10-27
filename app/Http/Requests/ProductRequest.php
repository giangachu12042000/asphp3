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
            'price' => 'Giá',
            'desc'=>'Mô tả',
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required | max:100 | min:5',
            'category_id' => 'required',
            'image_url' => 'image | required',
            'price' => 'required|int',
            'sale_percent' => 'required',
            'stocks' => 'required',
            'is_active' => 'required',
            'desc' => 'required|min:5|max:100'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng',
            'max' => ':attribute độ dài tối đa không vượt quá 100 ký tự',
            'min' => ':attribute độ dài tối thiểu là 5 ký tự',
            
            
        ];
    }
}
