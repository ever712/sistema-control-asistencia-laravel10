<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\InstitucionController;
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

Route::get('/delete-supervisores/{id}',[SupervisorController::class, 'deleteSupervisores'])->name('delete.supervisores');

Route::get('/display-instituciones',[InstitucionController::class, 'displayInstituciones'])->name('display.instituciones');

Route::get('/create-instituciones', [InstitucionController::class, 'createInstituciones'])->name('create.instituciones');

Route::post('/create-instituciones', [InstitucionController::class, 'storeInstituciones'])->name('store.instituciones');

Route::get('/edit-instituciones/{id}', [InstitucionController::class,'editInstituciones'])->name('edit.instituciones');

Route::post('/update-instituciones/{id}', [InstitucionController::class,'updateInstituciones'])->name('update.instituciones');

Route::get('/delete-instituciones/{id}', [InstitucionController::class,'deleteInstituciones'])->name('delete.instituciones');