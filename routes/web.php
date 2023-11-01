<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\ActividadController;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');
Route::get('/Paquetes', [PaquetesController::class, 'index'])->name('paquetes');
Route::get('/Actividades',[ActividadController::class,'index'])->name('actividades');

Auth::routes();
