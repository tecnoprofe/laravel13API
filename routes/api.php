

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AerolineaController;

Route::get('/vuelosapi', function () {
    return response()->json(['mensaje' => 'hola vuelos']);
});

Route::apiResource('aerolineas', AerolineaController::class);

Route::get('aerolineas/{id}/vuelos', [AerolineaController::class, 'vuelos']);
