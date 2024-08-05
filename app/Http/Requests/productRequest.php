<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
            "soluong" =>"required|integer",
            "price"=>"required|integer",
            // 'categories_id'=>'required',
        ];

    }

    public function messages()
    {
        return [
            'name.required' =>'bat buoc phai nhap',
            'name.min'=> 'phai co it nhat min : ky tu',
            'soluong.required' => 'bat buoc phai nhap',
            'soluong.integer' => 'phai la kieu so nguyen',
            'price.required' => 'bat buoc phai nhap',
            'price.integer' => 'phai la kieu so nguyen'

        ];

    }
}
