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

    $navBarLinks = ['Home', 'About Us', 'News'];

    return view('home', ['navBarLinks' => $navBarLinks]);
})->name('Home');

Route::get('/About Us', function() {

    $navBarLinks = ['Home', 'About Us', 'News'];

    return view('aboutUs', ['navBarLinks' => $navBarLinks]);
})->name('About Us');

Route::get('/News', function() {

    $navBarLinks = ['Home', 'About Us', 'News'];

    return view('news', ['navBarLinks' => $navBarLinks]);
})->name('News');
