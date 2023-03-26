<?php

namespace App\Http\Controllers;

use App\Models\Artistas;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datos = Artistas::all();
        return view('inicio',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout/frmArtista');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artistas $artistas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artistas $artistas)
    {
        return("Aqui se puede actualizar a un artista");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artistas $artistas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artistas $artistas)
    {
        //
    }
}
