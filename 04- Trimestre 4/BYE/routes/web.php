<?php

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
    return view('index');
});

Route::get('/ingreso.blade.php', function () {
    return view('ingreso');
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

Route::get('/Registro.blade.php', function () {
    return view('Registro');
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