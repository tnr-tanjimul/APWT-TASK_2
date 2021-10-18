<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('pages.home');
});





Route::get('/product/list',[ProductController::class,'list'])->name('student.list');
Route::get('/product/list',[ProductController::class,'list'])->name('student.list');
Route::get('/product/delete/{id}',[ProductController::class,'delete']);

