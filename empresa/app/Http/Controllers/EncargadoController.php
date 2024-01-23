<?php

namespace App\Http\Controllers;



use App\Models\Encargado;
use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('encargados.index', ["encargados"=> Encargado::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('encargados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Encargado::create(['encargado' => $request->encargado]);
        return redirect()->route('encargados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Encargado $encargado)
    {
        return view('encargados.show', ['encargado'=> $encargado]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Encargado $encargado)
    {
        return view('encargados.edit', ['encargado'=>$encargado]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Encargado $encargado)
    {
        $encargado->update(['encargado'=>$request->encargado]);
        return redirect()->route('encargados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encargado $encargado)
    {
        Encargado::destroy($encargado->id);
        return redirect()->route('encargados.index');
    }
}
