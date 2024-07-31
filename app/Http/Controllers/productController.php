<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productRequest ;
use App\Models\product;
use App\Models\categories;
class productController extends Controller
{      
     
     
      


     public function createView()
     {  
        $categories = categories ::pluck("name","id");
       
        return view('createProduct' ,compact('categories'));

     }

     public function create(productRequest  $request)
     { 
           $product = Product::create([
               'name'=> $request->name,
               'soluong'=> $request->soluong,
               'price'=> $request->price,
               'categories_id'=>$request->categories_id
           ]);
           
     }

     public function Viewupdate($id)
     {
            $product = product::find($id);
            return view('update' , compact('product'));
        
     }

     public function update(productRequest $request , $id)
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

     public function show()
     {
        $product = product::all();
        return view('show' ,compact('product'));
     }
     
}
