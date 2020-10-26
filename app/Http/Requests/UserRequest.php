<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function attributes()
    {
        return [
            'first_name' => 'Họ',
            'last_name' => 'Tên',
            'password' => 'Mật khẩu',
            'image_url' => 'Ảnh đại diện',
            'email' => 'Email',
            'birthday' => 'Ngày sinh',
            'address' => 'Địa chỉ'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // dd($user->id);
        return [
            'first_name' => 'required|min:6|max:20',
            'last_name' => 'required|min:6|max:20',
            'password' => 'required',
            'image_url' => 'image',
            'email' => 'required | unique:users,email',
            'birthday' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'email' => ':attribute không đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'image' => ':attribute không đúng định dạng',
            'min' => ':attribute độ dài tối thiểu 6 kí tự',
            'max' => ':attribute độ dài tối đa 6 kí tự',
        ];
    }
}
