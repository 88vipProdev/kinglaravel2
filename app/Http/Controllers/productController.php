<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productRequest ;
use App\Models\product;
class productController extends Controller
{      
      protected $product;
      public function __construct(product $product)
      {
            $this->product = $product;
      }


     public function createView()
     {
        return view('createProduct');
     }

     public function create(productRequest  $request)
     { 
   
      $datalist = [
         "name"=>$request->input("name"),
         
         "soluong"=>$request->input("soluong"),
         "price"=>$request->input("price"),
         
         ];
         
         product::createProduct($datalist);
     }
}
