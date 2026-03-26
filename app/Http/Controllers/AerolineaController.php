<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aerolinea;

class AerolineaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aerolineas = Aerolinea::all(); // select * from aerolineas
        return view('aerolineas.index', compact('aerolineas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('aerolineas.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aerolinea::create($request->all());
        return redirect()->route('aerolineas.index');        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aerolinea = Aerolinea::findOrFail($id);
        $aerolinea->delete(); 
        return redirect()->route('aerolineas.index');
        
    }
}
