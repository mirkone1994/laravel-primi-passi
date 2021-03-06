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
        'name' => 'Mirko',
        'surname' => 'Chiappori',
    ];
    return view('home', $data);
})->name('home');

Route::get('/page1', function () {
    $data = [
        'name' => 'Lorenzo',
        'surname' => 'Cazzola',
    ];
    return view('navbar.page1', $data);
})->name('page1');

Route::get('/page2', function () {
    $data = [
        'name' => 'Giovanni',
        'surname' => 'Leoncini',
    ];
    return view('navbar.page2', $data);
})->name('page2');
