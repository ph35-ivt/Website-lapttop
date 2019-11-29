<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:6',
            'level' => 'numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'vui lòng nhập tên',
            'name.min' => 'nhập ít nhất 3 ký tự',
            'email.required' => 'vui lòng nhập email',
            'password.required' => ' vui lòng nhập mật khẩu',
            'password.min' => 'nhập ít nhất 6 ký tự',
            'level.numeric' => 'nhập ký tự là chữ số '
        ];
    }
}
