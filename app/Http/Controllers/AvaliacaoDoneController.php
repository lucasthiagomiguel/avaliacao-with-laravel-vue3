<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAvaliacaoDoneRequest;
use App\Http\Requests\UpdateAvaliacaoDoneRequest;
use App\Models\AvaliacaoDone;
use Illuminate\Http\Request;

class AvaliacaoDoneController extends Controller
{
    public function __construct(AvaliacaoDone $avaliacaoDone)
    {
        $this->avaliacaoDone = $avaliacaoDone;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avaliacaoDone = $this->avaliacaoDone
        ->where('avaliacao_dones.id_gestor','=',0)
        ->groupBy('avaliacao_dones.quadrante')
        ->orderBy('avaliacao_dones.name')
        ->select('users.*','avaliacao_dones.*')
        ->join('users', 'avaliacao_dones.id_users', '=', 'users.id')
        ->get();
        // dd($avaliacaoDone->fillable);
        return  response()->json($avaliacaoDone,200); 
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $performance = ($request->pergunta1 + $request->pergunta2 + $request->pergunta3 + $request->pergunta4 + $request->pergunta5 )/ 5;
        $competencia = ($request->pergunta6 + $request->pergunta7 + $request->pergunta8 + $request->pergunta9 + $request->pergunta10 + $request->pergunta11 + $request->pergunta12) /7;
         
        $quadrante = '';
        switch($performance ) {
            case($performance <= 1.5 &&  $competencia ==3.0):
                // dd('passei aqui');
                $quadrante = 'Enigma';
 
                break;
 
            case($performance >= 1.5 && $performance < 3.0 &&  $competencia ==3.0):
                // dd('passei aqui');
                $quadrante = 'Potencial';
    
                break;    
            case($performance == 3.0 &&  $competencia ==3.0):
                // dd('passei aqui');
                $quadrante = 'Talento';
    
                break;   
            case($performance <= 1.5  &&  $competencia >= 1.5 &&  $competencia <3.0):
                // dd('passei aqui');
                $quadrante = 'Questionável';
    
                break;   
            case($performance >= 1.5  && $performance < 3.0  &&  $competencia >= 1.5 &&  $competencia <3.0):
                // dd('passei aqui');
                $quadrante = 'Mantenedor';
    
                break;  
            case($performance == 3.0   &&  $competencia >= 1.5 &&  $competencia <3.0):
                // dd('passei aqui');
                $quadrante = 'Desempenho';
    
                break;  
            case($performance <= 1.5   &&  $competencia <= 1.5 ):
                // dd('passei aqui');
                $quadrante = 'Risco';
    
                break;  
            case($performance >= 1.5  && $performance < 3.0  &&  $competencia >= 1.5 ):
                // dd('passei aqui');
                $quadrante = 'Eficaz';
    
                break;  
            case($performance == 3.0  && $performance < 3.0  &&  $competencia >= 1.5 ):
                // dd('passei aqui');
                $quadrante = 'Comprometimento';
    
                break;  
 
            default:
                $msg = 'Something went wrong.';
        }
 
        // dd($request);
        // $request->validate($this->avaliacaoDone->rules(),$this->avaliacaoDone->feedback());
       $avaliacaoDone = $this->avaliacaoDone->create([
            "pergunta1"=>$request->pergunta1,
            "pergunta2"=>$request->pergunta2,
            "pergunta3"=>$request->pergunta3,
            "pergunta4"=>$request->pergunta4,
            "pergunta5"=>$request->pergunta5,
            "pergunta6"=>$request->pergunta6,
            "pergunta7"=>$request->pergunta7,
            "pergunta8"=>$request->pergunta8,
            "pergunta9"=>$request->pergunta9,
            "pergunta10"=>$request->pergunta10,
            "pergunta11"=>$request->pergunta11,
            "pergunta12"=>$request->pergunta12,
            "id_users"=>$request->id_users,
            "name"=>$request->name,
            "quadrante"=>$quadrante,
            "total_competencia"=>$competencia,
            "total_performance"=>$performance
       ]);
        return response()->json($avaliacaoDone,201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avaliacaoDone = $this->avaliacaoDone->where('id_gestor','=',$id)->groupBy('quadrante')->orderBy('name')->get();
        if($avaliacaoDone === null){
            return response()->json(['error' => 'Not exist'],404); 
            
        }
        return response()->json($avaliacaoDone,200); 
    }
    /**
     * Display the specified resource.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function avaliacao($id)
    {
        $avaliacaoDone = $this->avaliacaoDone
        ->join('avaliacao_feitas', 'avaliacaoDone.id', '=', 'avaliacao_feitas.id_avaliacaoDone_gestor')
        ->select('avaliacaoDone.*', 'avaliacao_feitas.*')
        ->where('avaliacaoDone.id_gestor','=',1)->get();
        return response()->json($avaliacaoDone,200); 
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
        $avaliacaoDone = $this->avaliacaoDone->find($id);
        if($avaliacaoDone === null){
            return response()->json(['error' => 'avaliacaoDone not   exist'],404);
        }
        if($request->method() === 'PATCH'){
            $ruleDinamic = array();

            //testing all rules of model avaliacaoDone
            foreach($avaliacaoDone->rules() as $input => $rules){
                $ruleDinamic[$input] = $rules;
            }

            $request->validate($ruleDinamic,$this->avaliacaoDone->feedback());
        }else{
            $request->validate($this->avaliacaoDone->rules(),$this->avaliacaoDone->feedback());
        }
        $avaliacaoDone->update($request->all());
        return response()->json($avaliacaoDone,200); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $avaliacaoDone = $this->avaliacaoDone->find($id);
        $avaliacaoDone->update([
            'status' => 0
        ]);
        return $avaliacaoDone;
    }
}
