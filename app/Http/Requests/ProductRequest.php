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
            'name' => 'required|unique:products',
            'description' => 'required',
            'url' => 'unique:products',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'This Product Name is already exisit.'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Product Name',
        ];
    }
}
