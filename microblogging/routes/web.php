<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::resource('posts', PostController::class);
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */


Route::get('/', 'App\Http\Controllers\PostController@index');
// Route::get('/posts', 'App\Http\Controllers\PostController@store');
// Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::get('/posts', [PostController::class , 'store']);
Route::post('/posts', [PostController::class , 'store'])->name('posts');


//route for user 
Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';