<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function() {
//    return view('welcome');
//})->name("home");
//
//Route::get('/add', function () {
//    return view('add');
//})->name('add');
//
//Route::get('/view', function () {
//    return view('view');
//})->name('view');

Route::get('gfg', function () {
    return view('gfg');
});

//Route::resource()

Route::get('/', [TodoController::class, 'index'])->name('home');

Route::get('/add', [TodoController::class, 'create'])->name('add');

Route::post('/add', [TodoController::class, 'store'])->name('store');

Route::get('/view', [TodoController::class, 'index'])->name('view');

Route::post('/update/{id}', [TodoController::class, 'update'])->name('update');







