<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            "name" =>"required|min:6",
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'bat buoc phai nhap',
            'name.min'=> 'phai co it nhat min : ky tu',
        ];
    }
}