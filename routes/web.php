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
    $data = [
        'hello' => 'Hello',
        'name' => 'Laravel!',
    ];
    return view('home', $data);
})->name('home');

Route::get('/pages.header',function (){
    $data = [
        'hello' => 'Hello',
        'name' => 'Header!'
    ];
    return view('pages.header', $data);
})->name('header');

Route::get('/pages.main',function (){
    $data = [
        'hello' => 'Hello',
        'name' => 'Main!'
    ];
    return view('pages.main', $data);
})->name('main');