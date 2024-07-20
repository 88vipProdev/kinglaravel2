<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class product extends FormRequest
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
            'name' =>'required|min 6',
            'soluong'=>'required|integer',
            'price'=>'required | integer'
        ];
    }

    public function messages()
    {
        return [
            'required' => "bat buoc phai nhap",
            'min' =>"khong duoc nho hon min ky tu",
            'integer'=>'phai la so'
        ];
    }
}
