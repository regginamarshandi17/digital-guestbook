<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Create;
use App\Http\Controllers\Read;
use App\Http\Controllers\Update;
use App\Http\Controllers\Delete;
use App\Http\Controllers\Save;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/create', [Create::class, 'create']);
Route::get('/read', [Read::class, 'read']);
Route::get('/update', [Update::class, 'update']);
Route::get('/delete', [Delete::class, 'delete']);
Route::post('/read', [Save::class, 'save']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
