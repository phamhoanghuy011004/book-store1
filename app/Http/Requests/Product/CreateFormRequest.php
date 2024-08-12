<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
class CreateFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'author.required' => 'Tên tác giả là bắt buộc.',
            'description.required' => 'Mô tả là bắt buộc.',
            'category.required' => 'Danh mục là bắt buộc.',
            'content.required' => 'Nội dung là bắt buộc.',
            'publish_at.required' => 'Ngày xuất bản là bắt buộc.',
            'amount.required' => 'Số lượng là bắt buộc.',
            'price.required' => 'Giá là bắt buộc.',
            'status.required' => 'Trạng thái là bắt buộc.',
        ];
    }
}
