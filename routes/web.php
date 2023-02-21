<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CrearListaActividades;
use App\Http\Controllers\MaquetaPrincipalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\RegisterUserRequest;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/dashboard', [MaquetaPrincipalController::class, 'funciondashboard']
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/actividades', [CrearListaActividades::class, 'funcioncrearlistaactividades']
)->name('actividades');

Route::post('/actividades', [CrearListaActividades::class, 'almacenarlistaactividades']
)->name('almacenarlistaactividades');

Route::get('/showuser', [Controller::class, 'showuser']);