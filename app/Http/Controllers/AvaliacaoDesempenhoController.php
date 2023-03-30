<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAvaliacaoDesempenhoRequest;
use App\Models\AvaliacaoDesempenho;
use Illuminate\Http\Request;

class AvaliacaoDesempenhoController extends Controller
{
    public function __construct(AvaliacaoDesempenho $performance)
    {
        $this->performance = $performance;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $performance = $this->performance->all();
        return  response()->json($performance,200); 
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
