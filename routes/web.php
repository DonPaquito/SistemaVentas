<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [MenuController::class, 'index'])->name('index');

// Rutas para Clientes
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

// Rutas para Ventas
Route::get('/ventas/index', [VentasController::class, 'index'])->middleware('auth')->name('ventas.index');
Route::get('/ventas/create', [VentasController::class, 'create'])->middleware('auth')->name('ventas.create');
Route::post('/ventas/store', [VentasController::class, 'store'])->name('ventas.store');
Route::post('/ventas/agregarCompuesto', [VentasController::class, 'agregarCompuesto'])->name('ventas.agregarCompuesto');
Route::get('/ventas/{venta}', [VentasController::class, 'show'])->middleware('auth')->name('ventas.show');

// Rutas para Proveedores
Route::get('/proveedores', [ProveedoresController::class, 'index'])->middleware('auth')->name('proveedores.index');
Route::get('/proveedores/create', [ProveedoresController::class, 'create'])->middleware('auth')->name('proveedores.create');
Route::post('/proveedores', [ProveedoresController::class, 'store'])->name('proveedores.store');
Route::get('/proveedores/{proveedor}/edit', [ProveedoresController::class, 'edit'])->middleware('auth')->name('proveedores.edit');
Route::put('/proveedores/{proveedor}', [ProveedoresController::class, 'update'])->name('proveedores.update');
Route::delete('/proveedores/{proveedor}', [ProveedoresController::class, 'destroy'])->name('proveedores.destroy');

// Rutas para Componentes
Route::get('/componentes', [ComponentesController::class, 'index'])->middleware('auth')->name('componentes.index');
Route::get('/componentes/create', [ComponentesController::class, 'create'])->middleware('auth')->name('componentes.create');
Route::post('/componentes', [ComponentesController::class, 'store'])->name('componentes.store');
Route::get('/componentes/{componente}/edit', [ComponentesController::class, 'edit'])->middleware('auth')->name('componentes.edit');
Route::put('/componentes/{componente}', [ComponentesController::class, 'update'])->name('componentes.update');
Route::delete('/componentes/{componente}', [ComponentesController::class, 'destroy'])->name('componentes.destroy');

Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/ciudads', [CiudadController::class,'index'])->middleware('auth')->name('ciudads.index');
Route::get('/ciudads/create', [CiudadController::class, 'create'])->middleware('auth')->name('ciudads.create');
Route::post('/ciudads', [CiudadController::class, 'store'])->name('ciudads.store');
Route::get('/ciudads/{ciudad}/edit', [CiudadController::class, 'edit'])->middleware('auth')->name('ciudads.edit');
Route::put('/ciudads/{ciudad}', [CiudadController::class, 'update'])->name('ciudads.update');
Route::delete('/ciudads/{ciudad}', [CiudadController::class, 'destroy'])->name('ciudads.destroy');







Route::get('/documentos', [DocumentoController::class,'index'])->middleware('auth')->name('documentos.index');
Route::get('/documentos/create', [DocumentoController::class, 'create'])->middleware('auth')->name('documentos.create');
Route::post('/documentos', [DocumentoController::class, 'store'])->name('documentos.store');
Route::get('/documentos/{documento}/edit', [DocumentoController::class, 'edit'])->middleware('auth')->name('documentos.edit');
Route::put('/documentos/{documento}', [DocumentoController::class, 'update'])->name('documentos.update');
Route::delete('/documentos/{documento}', [DocumentoController::class, 'destroy'])->name('documentos.destroy');


Route::get('/categorias', [CategoriaController::class,'index'])->middleware('auth')->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->middleware('auth')->name('categorias.create');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->middleware('auth')->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');



Route::get('/empleados', [EmpleadoController::class,'index'])->middleware('auth')->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->middleware('auth')->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{empleado}/edit', [EmpleadoController::class, 'edit'])->middleware('auth')->name('empleados.edit');
Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/{empleado}', [EmpleadoController::class, 'destroy'])->name('empleados.destroy');






Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// Rutas de Registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::view('/privada', "secret")->middleware('auth')->name('privada');



// Ruta para cerrar sesión (puede estar dentro del grupo middleware si deseas protegerla también)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
