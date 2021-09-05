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
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/users', App\Http\Controllers\UserController::class)->name('users.index');
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('tasks', \App\Http\Controllers\TaskController::class);
    Route::resource('clients', \App\Http\Controllers\ClientController::class);
});

