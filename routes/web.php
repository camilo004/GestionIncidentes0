<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaestrafrecuencialogController;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

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
Route::get('/seleccionar/proyecto/{id}', [App\Http\Controllers\HomeController::class, 'selectProject'])->name('home');
Route::get('/report', [App\Http\Controllers\IncidentController::class, 'create'])->name('report');
Route::post('/report', [App\Http\Controllers\IncidentController::class, 'store'])->name('report');

Route::get('/ver/{id}', [App\Http\Controllers\IncidentController::class, 'show'])->name('ver');
Route::get('/incidencia/{id}/editar', [App\Http\Controllers\IncidentController::class, 'edit'])->name('ver');
Route::post('/incidencia/{id}/editar', [App\Http\Controllers\IncidentController::class, 'update'])->name('ver');

Route::get('/incidencia/{id}/resolver', [App\Http\Controllers\IncidentController::class, 'solve'])->name('ver');
Route::get('/incidencia/{id}/atender', [App\Http\Controllers\IncidentController::class, 'take'])->name('ver');
Route::get('/incidencia/{id}/abrir', [App\Http\Controllers\IncidentController::class, 'open'])->name('ver');
Route::get('/incidencia/{id}/derivar', [App\Http\Controllers\IncidentController::class, 'nextLevel'])->name('ver');
Route::post('/mensaje', [App\Http\Controllers\MessageController::class, 'store'])->name('mensaje');

Route::middleware(['admin'])->group(function () {
    Route::get('/usuarios', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('usuarios');
    Route::post('/usuarios', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('usuarios');
    Route::get('/usuario/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('usuarios');
    Route::post('/usuario/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('usuarios');
    Route::get('/usuario/{id}/eliminar', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('usuarios');


    Route::get('/proyectos', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('proyectos');
    Route::post('/proyectos', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('proyectos');
    Route::get('/proyectos/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('proyectos');
    Route::post('/proyectos/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('proyectos');
    Route::get('/proyectos/{id}/eliminar', [App\Http\Controllers\Admin\ProjectController::class, 'delete'])->name('proyectos');
    Route::get('/proyectos/{id}/restaurar', [App\Http\Controllers\Admin\ProjectController::class, 'restore'])->name('proyectos');

    Route::post('/categoria', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('categoria');
    Route::post('/categoria/editar', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categoria');
    Route::get('/categoria/{id}/eliminar', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('categoria');

    Route::post('/nivel', [App\Http\Controllers\Admin\LevelController::class, 'store'])->name('nivel');
    Route::post('/nivel/editar', [App\Http\Controllers\Admin\LevelController::class, 'update'])->name('nivel');
    Route::get('/nivel/{id}/eliminar', [App\Http\Controllers\Admin\LevelController::class, 'delete'])->name('nivel');

    Route::post('/proyecto-usuario', [App\Http\Controllers\Admin\ProjectUserController::class, 'store'])->name('proyecto-usuario');
    Route::get('/proyecto-usuario/{id}/eliminar', [App\Http\Controllers\Admin\ProjectUserController::class, 'delete'])->name('proyecto-usuario');

    


});


