<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoriesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/', [homeController::class ,'index']);

Route :: get('createView',[productController::class ,'createView'])->name('createView');
Route :: post('createView' ,[productController::class , 'create'])->name('create');
Route ::get('show', [homeController::class , 'show'])->name('show');
Route::get('Viewupdate/{id}' ,[productController::class ,'Viewupdate'])->name('Viewupdate');
Route::post('Viewupdate/{id}', [productController::class , 'update'])->name('update');
Route::get('delete/{id}' ,[productController::class ,'delete'])->name('delete');

Route :: get('createCategories' , [categoriesController::class, 'createCategories'])->name("createCategories");
Route::post('createCategories',[categoriesController::class , 'add'])->name("addCategories");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
