<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;
class categories extends Model
{
    use HasFactory;


    protected $table = "categories";
    protected $fillable =["name"];
    public function categories()
    {
        return $this->hasMany(product ::class , 'categories_id' , 'id');
    }
}
