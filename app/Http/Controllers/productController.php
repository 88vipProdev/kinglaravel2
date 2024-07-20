<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use App\Http\Requests\product;
class productController extends Controller
{
    


     public function createView()
     {
        return view('createProduct');
     }

     public function create(product $request)
     {
            // dd($request);
     }
}
