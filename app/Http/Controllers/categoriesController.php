<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\categories;

class categoriesController extends Controller
{
        public function createCategories()
        {
            return view('categories');
        }

        public function add(CategoryRequest $request )
        {
            categories::create($request->all());
        }

}
