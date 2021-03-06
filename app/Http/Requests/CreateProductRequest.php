<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|min:3' ,
            'content' =>  'required|min:6',
            'price' => 'required|numeric',
            'link'=> 'required',
            'quantity' => 'required|numeric',
            'status' => 'required'
        ];
    }
    public function messages()
    {
        return [
            
            'name.required' =>'vui lòng nhập tên',
            'name.min'=>'vui lòng nhập ít nhất 3 ký tự',
            'name.required' =>'vui lòng chọn',
            'slug.required'=>'vui lòng nhập tên không dấu',
            'slug.min'=>'nhập ít nhất 3 ký tự',
            'content.required'=>'vui lòng nhập nội dung',
            'content.min'=>'nhập ít nhất 6 ký tự',
            'price.required'=>'vui lòng nhập giá sản phẩm',
            'price.numeric'=>'nhập ký tự là chữ số',
            'link.required'=>'vui lòng chọn file',
            'quantity.required'=>'vui lòng nhập số lượng',
            'quantity.numeric'=>'nhập ký tự là chữ số',
            'status.required'=>'vui lòng nhập trạng thái',
            
        ];
    }
}
