<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class product extends Model
{
    use HasFactory;


    public function createProduct($data)
    {
         DB::insert('INSERT INTO product (name , soluong ,price)values (? ,? ,?)', $data);
    }


}   
