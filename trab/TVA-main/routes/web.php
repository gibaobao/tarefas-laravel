<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefasController;

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

Auth::routes();

/*Route::get('/', function () {
    return view('tarefa');
});*/

Route::resource('/', TarefasController::class);

Route::resource('/home', TarefasController::class);

Route::resource('tarefa', TarefasController::class);
