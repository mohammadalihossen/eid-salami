<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalamiController;

Route::get('/', function () {
    return view('home');
});

Route::get('/create',[SalamiController::class,'create']);

Route::post('/store',[SalamiController::class,'store']);

Route::get('/open/{token}', function($token){
    return view('open',compact('token'));
});

Route::get('/salami/{id}', function ($id) {
    return view('receive');
});