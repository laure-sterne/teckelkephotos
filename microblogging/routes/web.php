<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::resource('posts', PostController::class);
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */


Route::get('/', 'App\Http\Controllers\PostController@index');
//route pour récupérer les données du formulaire
Route::get('/posts', [PostController::class , 'store']);
//route pour envoyer les données du formulaire dans la db
Route::post('/posts', [PostController::class , 'store'])->name('posts');
Route::get('/profile', 'App\Http\Controllers\UserController@index');


//route for user 
Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';