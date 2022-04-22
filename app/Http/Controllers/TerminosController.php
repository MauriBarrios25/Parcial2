<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminos;
use App\Http\Resources\Termino as TerminosResource;

class TerminosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $terminos = Terminos::all();
        return TerminosResource::collection($terminos);
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
        $terminos = $request->isMethod('put') ? Terminos::findOrFail($request->id) : new Terminos;
        $terminos->id = $request->input('id');
        $terminos->nombre = $request->input('nombre');
        $terminos->descripcion = $request->input('descripcion');


        if($terminos->save()){
            return new TerminosResource($terminos);

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
        $terminos = Terminos::findOrFail($id);
        return new TerminosResource($terminos);

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
        $terminos= Terminos::findOrFail($id);

        if($terminos->delete()){
            return new TerminosResource($terminos);
        }

        
    }
}
