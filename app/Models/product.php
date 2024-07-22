<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class product extends Model
{
    use HasFactory;
        protected $table ='product';

    public function createProduct($data)
    {
        $product = new product();
                $product->name = $data["name"];
                $product->soluong = $data["soluong"];
                
                $product->price = $data["price"];
              
                $product ->save();

            
    
    }


}   
