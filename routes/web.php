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
    return view('inicio.index');
    // return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::view('/inicio','inicio.index')->name('inicio');

//Rutas de Bombas
Route::view('/bombas/altamira', 'bombas/altamira.index')->name('altamira');
Route::view('/bombas/armstrong', 'bombas/armstrong.index')->name('armstrong');
Route::view('/bombas/aurora', 'bombas/aurora.index')->name('aurora');
Route::view('/bombas/barmesa', 'bombas/barmesa.index')->name('barmesa');
Route::view('/bombas/franklin', 'bombas/franklin.index')->name('franklin');
Route::view('/bombas/grundfos', 'bombas/grundfos.index')->name('grundfos');
Route::view('/bombas/impel', 'bombas/impel.index')->name('impel');
Route::view('/bombas/jandy', 'bombas/jandy.index')->name('jandy');
Route::view('/bombas/mann', 'bombas/mann.index')->name('mann');
Route::view('/bombas/netzsch', 'bombas/netzsch.index')->name('netzsch');
Route::view('/bombas/pentar', 'bombas/pentar.index')->name('pentar');
Route::view('/bombas/scott', 'bombas/scott.index')->name('scott');
Route::view('/bombas/tsurumi', 'bombas/tsurumi.index')->name('tsurumi');
Route::view('/bombas/wdm', 'bombas/wdm.index')->name('wdm');
Route::view('/bombas/wilo', 'bombas/wilo.index')->name('wilo');
Route::view('/bombas/yamada', 'bombas/yamada.index')->name('yamada');
Route::view('/bombas/zoeller', 'bombas/zoeller.index')->name('zoeller');


//Rutas de Otras lineas de Productos
Route::view('/contraincendios','contraincendios.index')->name('contraincendios');
Route::view('/hidroneumaticos','hidroneumaticos.index')->name('hidroneumaticos');
Route::view('/motores','motores.index')->name('motores');

//Ruta de Blog
Route::view('/blog','blog.index')->name('blog');

//Ruta de Contacto
Route::view('/contacto','contacto.index')->name('contacto');

//Ruta de Tienda
Route::view('/tienda','tienda.index')->name('tienda');

//Ruta de Servicios
Route::view('/servicios','servicios.index')->name('servicios');
