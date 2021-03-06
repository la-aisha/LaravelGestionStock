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
Route::post('/categorie/persist', [App\Http\Controllers\CategorieController::class, 'persist'])->name('persistcategorie');



Route::get('/produit/add', [App\Http\Controllers\ProductController::class,'add' ])->name('addproduit');
Route::get('/produit/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('editproduit');
Route::post('/produit/update', [App\Http\Controllers\ProductController::class , 'update'])->name('updateproduit');
Route::get('/produit/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('deleteproduit');
Route::get('/produit/getAll', [App\Http\Controllers\ProductController::class, 'getAll'])->name('getallproduit');
Route::post('/produit/persist', [App\Http\Controllers\ProductController::class, 'persist'])->name('persistproduit');




Route::get('/entrees/add', [App\Http\Controllers\EntreeController::class,'add' ])->name('addentrees');
Route::get('/entrees/edit/{id}', [App\Http\Controllers\EntreeController::class, 'edit'])->name('editentrees');
Route::post('/entrees/update', [App\Http\Controllers\EntreeController::class , 'update'])->name('updateentrees');
Route::get('/entrees/delete/{id}', [App\Http\Controllers\EntreeController::class, 'delete'])->name('deleteentrees');
Route::get('/entrees/getAll', [App\Http\Controllers\EntreeController::class, 'getAll'])->name('getallentrees');
Route::post('/entrees/persist', [App\Http\Controllers\EntreeController::class, 'persist'])->name('persistentrees');


Route::get('/sorties/add', [App\Http\Controllers\SortieController::class,'add' ])->name('addsorties');
Route::get('/sorties/edit/{id}', [App\Http\Controllers\SortieController::class, 'edit'])->name('editsorties');
Route::post('/sorties/update', [App\Http\Controllers\SortieController::class , 'update'])->name('updatesorties');
Route::get('/sorties/delete/{id}', [App\Http\Controllers\SortieController::class, 'delete'])->name('deletesorties');
Route::get('/sorties/getAll', [App\Http\Controllers\SortieController::class, 'getAll'])->name('getallsorties');
Route::post('/sorties/persist', [App\Http\Controllers\SortieController::class, 'persist'])->name('persistsorties');
