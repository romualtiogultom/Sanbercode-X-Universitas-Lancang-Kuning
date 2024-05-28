<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Authcontroller;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/master', [Homecontroller::class ,'index']);


Route::get('/register',[Authcontroller::class ,'form']);

Route::post('/',[Authcontroller::class,'index']);

Route::get('/data-tables',function(){
    return view('pages.data-tables');
});


Route::get('/master',function(){
    return view('layouts.master');
});

Route::get('/tables',function(){
    return view('pages.tables');
});







