<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[NewController::class,'index'])->name('index');
Route::get('/register',[Newcontroller::class,'register'])->name('register');
Route::post('/registerdata',[NewController::class,'registerdata'])->name('registerdata');
Route::get('/view',[Newcontroller:: class,'view'])->name('view');
Route::get('/edit/{id}',[Newcontroller::class,'edit'])->name('edit');
Route::post('/update/{id}',[Newcontroller::class,'update'])->name('update');
Route::get('/delete/{id}',[Newcontroller::class,'delete'])->name('delete');