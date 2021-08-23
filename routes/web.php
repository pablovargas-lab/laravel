<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
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

//Route::resource('dashboard/post', 'dashboard\PostController');
Route::resource('Dashboard/post', 'App\Http\Controllers\Dashboard\PostController');

Route::get('/', function () {
    return view ('welcome');
})->name('home');