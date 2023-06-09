<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddproductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'inputName' => 'required|string|max:255|min:5',
            'inputPrice' => 'required|numeric',
            'inputPromotionPrice' => 'numeric',
            'inputUnit' => 'required|string',
            'inputNew' => 'required|numeric',
            'inputType' => 'required|numeric',
            'inputImage' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
            'inputDescription' => 'required|min:10'

        ];
    }
    // public function messages()
    // {
    //     return [
    //         'inputName.required' => 'Name must be filled in',
    //         'inputName.string' => 'Name must be String type',
    //         'inputName.max' => 'The maximum name should be 255 characters',
    //     ];
    // }
}
