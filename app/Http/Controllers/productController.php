<?php

namespace App\Http\Controllers;

use App\Models\admin\product as AdminProduct;
use App\Models\product;
use Illuminate\Http\Request;



class productController extends Controller
{   


    private $product ;
     public function __construct()
     {
        $this->product = new product();
     }

    public function createView()
    {
        return view('createProduct');
    }

    public function create(Request $request)
    {       dd($request);
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
                 $request->name,
                 $request->soluong,
                 $request->price
            ];


            $this->product->createProduct($data);
        

            
    }
}
