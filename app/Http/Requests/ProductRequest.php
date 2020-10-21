<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // 'name',
    //     'category_id',
    //     'image_url',



























    
    //     'desc',
    //     'price',
    //     'sale_percent',
    //     'stocks',
    //     'is_active'
    public function rules()
    {
        return [
            'name' => 'required',
            'category_id' => 'required',
            'image_url' => 'image',
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
            'image' => ':attribute không đúng định dạng'
        ];
    }
}
