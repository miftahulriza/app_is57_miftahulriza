<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\kelasController;

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
    
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/kelas', [kelasController::class, 'index']);
Route::get('/kelas/form', [kelasController::class, 'create']);
Route::post('/kelas/store', [kelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [kelasController::class, 'edit']);
Route::put('/kelas/{id}', [kelasController::class, 'update']);
Route::delete('/kelas/{id}', [kelasController::class, 'destroy']);
