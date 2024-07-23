<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('home');
        
    }

    public function show()
    {
            $product = product::all();
            return view('show',compact('product'));
    }
}
