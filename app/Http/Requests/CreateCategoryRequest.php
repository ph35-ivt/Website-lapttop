<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'parent_category_id'=>'required|numeric',
            'name'=>'required|min:3',
            'category_slug'=>'required|min:3',
            'description'=>'required|min:6',
            'order'=>'required|numeric',
            'status'=>'required|numeric'
        ];
    }
    public  function messages()
    {
        return [
            'parent_category_id.required'=>'vui lòng nhập ',
            'parent_category_id.numeric'=>'nhập ký tự là chữ số',
            'name.required'=>'vui lòng nhập tên',
            'name.min'=>'nhập ít nhất 3 ký tự',
            'category_slug.required'=>'vui lòng tên danh mục',
            'category_slug.min'=>'nhập ít nhất 3 ký tự',
            'description.required'=> 'vui lòng nhập nội dung',
            'description.min'=>'vui long nhập ít nhất 6 ký tự',
            'order.required'=>'vui lòng nhập',
            'order.numeric'=>'nhập ký tự là chữ số',
            'status.required'=>'vui lòng nhập trạng thái',
            'status.numeric'=>'nhập ký tự là chữ số'
        ];
    }
}
