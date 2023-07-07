<?php

use App\Http\Controllers\CuentaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SeguimientoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('/fallo404.blade.php', function () {
    return view('fallo404');
});

Route::get('/fallo500.blade.php', function () {
    return view('fallo500');
});

Route::get('/index.blade.php', function () {
    return view('index');
});


Route::get('/Catalogo.blade.php', function () {
    return view('Catalogo');
});

Route::get('/Inventario.blade.php', function () {
    return view('Inventario');
});

Route::get('/indexCuentaAd.blade.php', function () {
    return view('indexCuentaAd');
});

Route::get('/indexCuenta.blade.php', function () {
    return view('indexCuenta');
});

Route::get('/Catalogoclien.blade.php', function () {
    return view('Catalogoclien');
});

Route::get('/Catalogoad.blade.php', function () {
    return view('Catalogoad');
});

Auth::routes();

Route::get('productos/pdf', [ProductoController::class, 'pdf'])->name('productos.pdf');
Route::get('cuentas/pdf', [CuentaController::class, 'pdf'])->name('cuentas.pdf');
Route::get('eventos/pdf', [EventController::class, 'pdf'])->name('eventos.pdf');
Route::get('seguimientos/pdf', [SeguimientoController::class, 'pdf'])->name('seguimientos.pdf');

Route::get('/cuenta', 'App\Http\Controllers\CuentaController@index')->name('Cuenta.index');
Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('cuentas', 'App\Http\Controllers\CuentaController');
Route::resource('eventos', 'App\Http\Controllers\EventController');
Route::resource('seguimientos', 'App\Http\Controllers\SeguimientoController');
Route::get('/producto', 'App\Http\Controllers\ProductoController@index')->name('producto.index');
Route::get('evento', [App\Http\Controllers\EventoController::class, 'index'])->name('evento.index');
Route::get('seguimiento', [App\Http\Controllers\SeguimientoController::class, 'index'])->name('seguimiento.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
