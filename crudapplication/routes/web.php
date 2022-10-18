<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageCRUDController;
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
    return view('welcome');
});

// Route::get('/', function () {
//     return view('pages.index');
// });
Route::resource('add_movie', PageCRUDController::class);
Route::resource('pages', PageCRUDController::class);

// Route::get('add_movie', function () {
//     return view('pages.add_movie');
// });

Route::get('anime-details', function () {
    return view('pages.anime-details');
});
Route::get('anime-watching', function () {
    return view('pages.anime-watching');
});
Route::get('categories', function () {
    return view('pages.categories');
});
Route::get('login', function () {
    return view('pages.login');
});
Route::get('signup', function () {
    return view('pages.signup');
});
Route::get('main', function () {
    return view('pages.main');
});


