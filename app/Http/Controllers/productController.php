<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productRequest ;
use App\Models\product;
class productController extends Controller
{      
     
     
      


     public function createView()
     {
        return view('createProduct');
     }

     public function create(productRequest  $request)
     { 
            $product = new product();
            $product->name = $request->name;
            $product->soluong = $request->soluong;
            $product->price = $request->price;
            $product ->save();
           
     }
}
