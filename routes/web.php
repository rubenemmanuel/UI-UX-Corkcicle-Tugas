<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ErrorpageController;
use App\Http\Controllers\CollectionController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/collection', [CollectionController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', function(){
    return view('contact',[
        'title' => 'Contact Us',
    ]);
});

