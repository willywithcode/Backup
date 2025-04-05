<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'name' => [
                'required',
                'max:255',
                Rule::unique('products')->ignore(optional($this->route('product'))->id),
            ],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
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
