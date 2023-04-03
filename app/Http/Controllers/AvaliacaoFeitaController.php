<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AvaliacaoFeita;

class AvaliacaoFeitaController extends Controller
{
    public function __construct(AvaliacaoFeita $avaliacaoFeita)
    {
        $this->avaliacaoFeita = $avaliacaoFeita;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacaoFeita = $this->avaliacaoFeita->all();
        return  response()->json($avaliacaoFeita,200); 
    }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avaliacaoFeita = $this->avaliacaoFeita->create($request->all());
        return response()->json($avaliacaoFeita,201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

       /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
    }
}
