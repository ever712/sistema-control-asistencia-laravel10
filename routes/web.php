<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\SupervisorController;
use App\Models\Departamento;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/departamentos',DepartamentoController::class);

Route::resource('/supervisores',SupervisorController::class);

Route::get('/edit-supervisores/{id}', [SupervisorController::class,'editSupervisores'])->name('edit.supervisores');

Route::post('/update-supervisores/{id}',[SupervisorController::class, 'updateSupervisores'])->name('update.supervisores');

