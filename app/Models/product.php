<?php
namespace App\Models\admin;
use App\Models\admin\categoriesModel;
use App\Models\admin\detailModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product extends Model{


    public function insert($data)
    {
        DB::insert('INSERT INTO  product (name , soluong , price)values(? ,? , ?)',
        $data);
    }
}