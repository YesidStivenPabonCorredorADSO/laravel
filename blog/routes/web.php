<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/usuario', function () {
    return view('usuario');
});
Route::post('/usuario', [UserController::class, 'store'])->name('usuario');
Route::get('/editar',[UserController::class,'edit'])->name('editar.usuario');