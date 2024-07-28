<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class product extends Model
{
    use HasFactory;
        protected $table ='product';
        protected $fillable = ['name','soluong','price' ];
    

    

}   
