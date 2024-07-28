<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categories;

class categoriesController extends Controller
{
    

        public function createCategories()
        {
            return View('categories');
        }

        // public function add(categories $request)
        // {   $categories = new categories();
        //      $categories->name =$request->name;
        //     $categories->save();
        // }

}
