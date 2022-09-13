<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;

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
    return view('home');
});

Route::get('/contestants', function () {
    return view('contestants');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return redirect('/dashboard');
});

Route::middleware('auth')->group(function () {    
    Route::get('/home', function () {return view('home');})->name('home');
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('wizkids', ProjectController::class);
});

require __DIR__ . '/auth.php';
