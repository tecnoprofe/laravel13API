<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VueloController;
use App\Http\Controllers\PasajeroController;
use App\Http\Controllers\AerolineaController;

Route::get('/', function () {
    return view('layouts.dashboard');
});
// Cuando el usuario entra a http://sistema_vuelos.test/saludo
Route::get('/saludo', function () {
    return '¡Hola Ingenieros de la UPDS!';
});
// Apuntamos una ruta hacia nuestra nueva vista
Route::get('/inicio', function () {
    // Pasamos datos a la vista usando un Arreglo
    return view('inicio', [
        'usuario' => 'Jaime'
    ]);
});

Route::resource('vuelos',VueloController::class);
Route::resource('pasajeros',PasajeroController::class);
Route::resource('aerolineas',AerolineaController::class);


Route::get('/home', function () {    
    return "hola home";
});