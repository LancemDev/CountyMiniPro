<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function(){
    return view('menu');
});

Route::get('/createNewGroup', function(){
    return view('createNewGroup');
})->name('createNewGroup');

Route::get('/queryGroupRecords', function(){
    return view('queryGroupRecords');
})->name('queryGroupRecords');

Route::get('/renewGroupRegistration', function(){
    return view('renewGroupRegistration');
})->name('renewGroupRegistration');
