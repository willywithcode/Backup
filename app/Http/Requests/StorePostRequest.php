<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:posts,slug',
            'order' => 'required|integer|min:0',
            'excerpt' => 'required|string|max:1000',
            'content' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'category_ids' => 'required|array',
            'category_ids.*' => 'exists:categories,id',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là bắt buộc',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự',
            'slug.required' => 'Đường dẫn là bắt buộc',
            'slug.unique' => 'Đường dẫn này đã được sử dụng',
            'order.required' => 'Thứ tự bài viết là bắt buộc',
            'order.integer' => 'Thứ tự bài viết phải là số',
            'order.min' => 'Thứ tự bài viết phải ít nhất là 0',
            'excerpt.required' => 'Mô tả là bắt buộc',
            'content.required' => 'Nội dung là bắt buộc',
            'thumbnail.required' => 'Hình ảnh đại diện là bắt buộc',
            'thumbnail.image' => 'Hình ảnh đại diện phải là một hình ảnh',
            'thumbnail.mimes' => 'Hình ảnh đại diện phải có định dạng: jpeg, png, jpg, gif, svg, webp',
            'thumbnail.max' => 'Hình ảnh đại diện không được lớn hơn 2MB',
            'category_ids.required' => 'Phải chọn ít nhất một danh mục',
            'category_ids.array' => 'Danh mục phải được cung cấp dưới dạng mảng',
            'category_ids.*.exists' => 'Một hoặc nhiều danh mục đã chọn không hợp lệ',
        ];
    }
}
