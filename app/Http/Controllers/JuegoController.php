<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
use Illuminate\Validation\Rule;

class JuegoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('juegos.index', [
            'juegos' => Juego::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('juegos.create', [
            'juego' => new Juego
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:juegos',
            'url_juego' => 'required|url|unique:juegos',
            'descripcion' => 'required',
            'url_imagen' => 'required|url|unique:juegos',
            'estatus' => 'required',
        ]);

        $juego = new Juego;
        $juego->nombre = $request->get('nombre');
        $juego->url_juego = $request->get('url_juego');
        $juego->descripcion = $request->get('descripcion');
        $juego->url_imagen = $request->get('url_imagen');
        $juego->estatus = $request->get('estatus');
        $juego->save();

        return redirect()->route('juego.index')->with('status', 'El registro fue creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Juego $juego)
    {
        return view('juegos.show', [
            'juego' => $juego
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Juego $juego)
    {
        return view('juegos.edit', [
            'juego' => $juego
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        $request->validate([
            'nombre' => ['required', Rule::unique('juegos')->ignore($juego->id)],
            'url_juego' => ['required', 'url', Rule::unique('juegos')->ignore($juego->id)],
            'descripcion' => 'required',
            'url_imagen' => ['required', 'url', Rule::unique('juegos')->ignore($juego->id)],
            'estatus' => 'required',
        ]);


        $juego->nombre = $request->get('nombre');
        $juego->url_juego = $request->get('url_juego');
        $juego->descripcion = $request->get('descripcion');
        $juego->url_imagen = $request->get('url_imagen');
        $juego->estatus = $request->get('estatus');
        $juego->update();

        return redirect()->route('juego.index')->with('status', 'El registro fue actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {
        $juego->delete();

        return redirect()->route('juego.index')
            ->with('status', 'El registro fue eliminado con éxito.');
    }
}
