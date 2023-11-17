<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitucionController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PasanteController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::resource('/departamentos', DepartamentoController::class);

Route::resource('/supervisores', SupervisorController::class);

Route::get('/edit-supervisores/{id}', [SupervisorController::class, 'editSupervisores'])->name('edit.supervisores');

Route::post('/update-supervisores/{id}', [SupervisorController::class, 'updateSupervisores'])->name('update.supervisores');

Route::get('/delete-supervisores/{id}', [SupervisorController::class, 'deleteSupervisores'])->name('delete.supervisores');

Route::get('/display-instituciones', [InstitucionController::class, 'displayInstituciones'])->name('display.instituciones');
Route::get('/create-instituciones', [InstitucionController::class, 'createInstituciones'])->name('create.instituciones');
Route::post('/create-instituciones', [InstitucionController::class, 'storeInstituciones'])->name('store.instituciones');
Route::get('/edit-instituciones/{id}', [InstitucionController::class, 'editInstituciones'])->name('edit.instituciones');
Route::post('/update-instituciones/{id}', [InstitucionController::class, 'updateInstituciones'])->name('update.instituciones');
Route::get('/delete-instituciones/{id}', [InstitucionController::class, 'deleteInstituciones'])->name('delete.instituciones');


Route::get('/display-pasantes', [PasanteController::class, 'dispayPasantes'])->name('display.pasantes');
Route::get('/create-pasantes', [PasanteController::class, 'createPasantes'])->name('create.pasantes');
Route::post('/create-pasantes', [PasanteController::class, 'storePasantes'])->name('store.pasantes');
Route::get('/edit-pasantes/{id}', [PasanteController::class, 'editPasantes'])->name('edit.pasantes');
Route::post('/update-pasantes/{id}', [PasanteController::class, 'updatePasantes'])->name('update.pasantes');
Route::get('/delete-pasantes/{id}', [PasanteController::class, 'deletePasantes'])->name('delete.pasantes');

Route::get('/display-asistencias', [AsistenciaController::class, 'displayAsistencias'])->name('display.asistencias');
Route::get('/create-asistencias', [AsistenciaController::class, 'createAsistencias'])->name('create.asistencias');
Route::post('/create-asistencias', [AsistenciaController::class, 'storeAsistencias'])->name('store.asistencias');
Route::get('/edit-asistencias/{id}', [AsistenciaController::class, 'editAsistencias'])->name('edit.asistencias');
Route::post('/update-asistencias/{id}', [AsistenciaController::class, 'updateAsistencias'])->name('update.asistencias');
Route::get('/delete-asistencias/{id}', [AsistenciaController::class, 'deleteAsistencias'])->name('delete.asistencias');
Route::post('/ingreso-asistencias', [LandingController::class, 'registrar'])->name('ingreso.asistencias');

Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
Route::get('/edit-usuarios/{id}', [UsersController::class, 'editUsuario'])->name('edit.usuarios');
Route::post('/update-profile', [UsersController::class, 'updateUsuario'])->name('update.usuarios');
Route::get('/edit-profile-image/{id}', [UsersController::class, 'editImageUsuario'])->name('edit-image.usuarios');
Route::post('/update-profile-image', [UsersController::class, 'updateImageUsuario'])->name('update-image.usuarios');

Route::get('/admin-logout', [HomeController::class, 'cerrarSesion'])->name('admin.logout');

// PASANTES AUTHENTICATION

Route::get('/pasante/login', [PasanteController::class, 'viewLogin'])->name('view.login')->middleware('checkforauth');
Route::post('/pasante/login', [PasanteController::class, 'checkLogin'])->name('check.login');

Route::group(['middleware' => 'auth:pasante'], function () {
    Route::get('/pasante', [PasanteController::class, 'indexDashboard'])->name('pasantes.dashboard');
    Route::get('/pasante-logout', [PasanteController::class, 'cerrarSesion'])->name('pasantes.logout');
});
