<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about');
});




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['guest']], function() {
    //si no estas logueado puedes acceder a estas rutas y funciones
    Route::get('login/github', [LoginController::class, 'github']);
    Route::get('login/github/redirect', [LoginController::class, 'githubRedirect']);
    Route::get('login/google', [LoginController::class, 'google']);
    Route::get('login/google/redirect', [LoginController::class, 'googleRedirect']);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group(['middleware' => ['auth', 'role:Administrador']], function() {
    //si es administrador puede acceder a las siguientes rutas, si no le dira que no tiene permisos.
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('blogs', BlogController::class);
});