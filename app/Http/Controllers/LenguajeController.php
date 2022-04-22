<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lenguajes; 
use App\Http\Resources\Lenguaje as LenguajeResource;


class LenguajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lenguaje = Lenguajes::all();
        return LenguajeResource::collection($lenguaje);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $lenguaje = $request->isMethod('put') ? Lenguajes::findOrFail($request->id) : new Lenguajes;
        $lenguaje->id = $request->input('id');
        $lenguaje->nombre = $request->input('nombre');
        $lenguaje->informacion = $request->input('informacion');
        $lenguaje->creador = $request->input('creador');
        $lenguaje->fecha = $request->input('fecha');
        
        if($lenguaje->save()){
            return new LenguajeResource($lenguaje);

        }

       
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $lenguaje = Lenguajes::findOrFail($id);
        return new LenguajeResource($lenguaje);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $lenguaje = Lenguajes::findOrFail($id);

        if($lenguaje->delete()){
            return new LenguajeResource($lenguaje);
        }

    }
}
