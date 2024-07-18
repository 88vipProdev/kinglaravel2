<?php

namespace App\Http\Controllers;

use App\Models\admin\product;
use Illuminate\Http\Request;

class productController extends Controller
{   


    private $product ;
     public function __construct()
     {
            $this ->product = new product();
     }

    public function createView()
    {
        return view('createProduct');
    }

    public function create(Request $request)
    {
            $request->validate([
                "name" => 'required | min : 5',
                'soluong'=>'required | min:5',
                'price' => 'required | min:5'
            ],[
                'name.required' =>'ten bat buoc phai nhap',
                'name.min'=> 'ten phai du min ky tu',
                'soluong.required'=>'so luong bat buoc phai nhap ',
                'price.required' =>'bat buoc phai nhap '
            ]);
            $data = [
                'name'  => $request->name,
                'soluong'=> $request->soluong,
                'price' =>$request->price
            ];


            $this ->product->insert($data);

            
    }
}
