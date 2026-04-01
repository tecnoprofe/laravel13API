<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vuelo;
use App\Models\Aerolinea;

class AerolineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {               
       


        $aerolineas = Aerolinea::all();

        // Ya no devolvemos view('...'). Devolvemos JSON:
        return response()->json([
            'status' => 'exito',
            'data' => $aerolineas
        ], 200);         
    
    }


    public function vuelos($id)
    {
        
        $aerolinea = Aerolinea::find($id);         
                
        return response()->json([
            'status' => 'success',
            'data' => $aerolinea->vuelos
        ], 200);            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aerolinea = Aerolinea::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $aerolinea
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aerolinea = Aerolinea::find($id);

        if (!$aerolinea) {
            return response()->json([
                'status' => 'error',
                'message' => 'Aerolinea no encontrada'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $aerolinea
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aerolinea = Aerolinea::find($id);

        if (!$aerolinea) {
            return response()->json([
                'status' => 'error',
                'message' => 'Aerolinea no encontrada'
            ], 404);
        }

        $aerolinea->update($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $aerolinea
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aerolinea = Aerolinea::find($id);

        if (!$aerolinea) {
            return response()->json([
                'status' => 'error',
                'message' => 'Aerolinea no encontrada'
            ], 404);
        }

        $aerolinea->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Aerolinea eliminada'
        ], 200);
    }
}
