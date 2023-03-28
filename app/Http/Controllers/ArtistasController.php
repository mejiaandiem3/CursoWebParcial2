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
        $artista = new Artistas();
        $artista->nombre = $request->nombre;
        $artista->apaterno = $request->apaterno;
        $artista->amaterno= $request->amaterno;
        $artista->resena = $request->resena;


        $artista->save();
        return redirect()->route('artistas.index')->with("success","Guardado el registro!");
        

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $artista = Artistas::find($id);
        return view('layout/deleteArtista',compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $artista = Artistas::find($id);
        return view('layout/editArtista',compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $artista = Artistas::find($id);
        $artista->nombre = $request->nombre;
        $artista->apaterno = $request->apaterno;
        $artista->amaterno = $request->amaterno;
        $artista->resena = $request->resena;

        $artista->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $artista = Artistas::find($id);
        $artista->delete();
        return redirect('/');
    }
}
