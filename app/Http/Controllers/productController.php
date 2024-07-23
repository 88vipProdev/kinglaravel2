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

     public function Viewupdate($id)
     {
            $product = product::find($id);
            return view('update' , compact('product'));
        
     }

     public function update(productRequest $request , $id
     )
     {
         $product = product::find($id);
         $product->name = $request->name;
         $product->soluong = $request->soluong;
         $product->price = $request->price;
         $product ->save();
     }
//      xoa du lieu
     public function delete($id)
     {
              $product = product::destroy($id);
     }
}
