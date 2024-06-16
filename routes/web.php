<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservacionesController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/',[Controller::class,'index'])->name('index');

Route::get('/about',[Controller::class,'about']);

Route::get('/service',[Controller::class,'service']);

Route::get('/menu',[Controller::class,'menu']);

Route::get('/reservation',[Controller::class,'reservation']);

Route::get('/contact',[Controller::class,'contact']);

Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('login.destroy');
Route::post('/msj', [Controller::class, 'mensaje'])->name('index.msj');
Route::post('/reservacion',[Controller::class,'reservacion'])->name('index.reservacion');

Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/home',[ClienteController::class,'show']);
    Route::post('/home',[ClienteController::class,'createreservacion'])->name('cliente.reservacion');
    Route::get('/conocenos',[ClienteController::class,'conocenos']);
    Route::get('/servicios',[ClienteController::class,'servicios']);
    Route::get('/clientemenu',[ClienteController::class,'menu']);
    Route::get('/misreservaciones',[ClienteController::class,'mireservacion']);
    Route::get('/contactanos', [ClienteController::class, 'contactanos'])->name('cliente.contactanos');
    Route::post('/contactanos', [ClienteController::class, 'mensaje'])->name('cliente.msj');
});

Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('/dashboard',[AdminController::class,'show']);
    //reservaciones
    Route::get('/reservaciones',[ReservacionesController::class,'show'])->name('reservacion.show');
    Route::post('/reservaciones',[ReservacionesController::class,'reservacion'])->name('reservacion.create');
    Route::get('/reservaciones{id}',[ReservacionesController::class, 'delete'])->name('reservacion.destroy');
    Route::get('/reservacion{id}', [ReservacionesController::class, 'edit'])->name('reservacion.edit');
    Route::put('/reservaciones{id}',[ReservacionesController::class,'actualizar'])->name('reservacion.update');
    //
    //productos
    Route::get('/productos',[ProductosController::class,'show'])->name('produc');
    Route::post('/productos', [ProductosController::class, 'create'])->name('crud.createp');
    Route::get('/productos{producto}', [ProductosController::class, 'destroy'])->name('crud.destroy');
    Route::put('/mproductos{producto}', [ProductosController::class, 'update'])->name('crud.updatepr');
    Route::get('/product{id}', [ProductosController::class, 'edit'])->name('crud.edit');
    //
    //mensajes
    Route::get('/mensajes',[MensajesController::class,'show']);
    Route::get('/mensajes{id}',[MensajesController::class, 'delete'])->name('mensajes.destroy');
    //
    //usuarios
    Route::get('/usuarios',[UsuariosController::class,'show'])->name('usuarios.show');
    Route::post('/usuarios',[UsuariosController::class,'create'])->name('usuarios.create');
    Route::get('/usuario{id}', [UsuariosController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuario{id}', [UsuariosController::class, 'update'])->name('usuarios.update');
    Route::get('/eliminar{id}',[UsuariosController::class, 'destroy'])->name('usuarios.destroy');
});