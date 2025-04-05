<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|max:255|unique:products',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'status' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => __('messages.product_name'),
            'avatar' => __('messages.avatar'),
            'status' => __('messages.status'),
            'price' => __('messages.price'),
            'quantity' => __('messages.quantity'),
        ];
    }
}
