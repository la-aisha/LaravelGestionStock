<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/categorie/add', [App\Http\Controllers\CategorieController::class,'add' ])->name('addcategorie');
Route::get('/categorie/edit/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->name('editcategorie');
Route::post('/categorie/update', [App\Http\Controllers\CategorieController::class , 'update'])->name('updatecategorie');
Route::get('/categorie/delete/{id}', [App\Http\Controllers\CategorieController::class, 'delete'])->name('deletecategorie');
Route::get('/categorie/getAll', [App\Http\Controllers\CategorieController::class, 'getAll'])->name('getallcategorie');
