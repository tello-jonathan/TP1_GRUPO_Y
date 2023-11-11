<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\ActividadController;
<<<<<<< Updated upstream

=======
use App\Http\Controllers\EscapadaController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\AdminController;
use App\Models\Admin;
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
Route::get('/Paquetes', [PaquetesController::class, 'index'])->name('paquetes');
Route::get('/Actividades',[ActividadController::class,'index'])->name('actividades');

Auth::routes();
=======
Route::get('/paquetes', [PaquetesController::class, 'index'])->name('paquetes');
Route::get('/actividades',[ActividadController::class,'index'])->name('actividades');
Route::get('/escapadas',[EscapadaController::class,'index'])->name('escapadas');
Route::get('/contacto',[ContactoController::class,'index'])->name('contacto');
Route::get('/nosotros',[NosotrosController::class,'index'])->name('nosotros');
Route::resource('admin',AdminController::class);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> Stashed changes
