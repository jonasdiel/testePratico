<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Medico;
use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;

class MedicoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $busca = $request->get('busca');
        if( strlen($busca) > 0 ) {
            $medicos = Medico::where('nome', 'LIKE', '%'.$busca.'%')->orWhere('crm', 'LIKE', '%'.$busca.'%')->get();
        }
        else {
            $medicos = Medico::all();
        }
        return response()->json($medicos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $medico = new Medico();
        $medico->nome = $request->nome;
        $medico->telefone = $request->telefone;
        $medico->crm = $request->crm;
        $return = $medico->save();
        $medico->especialidades()->sync(array_filter((array)$request->especialidades));
        return response()->json($return);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $medico = Medico::find($id);
        $esp = array();
        foreach($medico->especialidades()->get() as $cod=> $especialidade) {

            $esp[$especialidade->id] = $especialidade->id;
        }
        return response()->json(compact('medico', 'esp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $medico = Medico::find($id);
        $medico->nome = $request->nome;
        $medico->telefone = $request->telefone;
        $medico->crm = $request->crm;
        $return = $medico->save();
        $medico->especialidades()->sync(array_filter((array)$request->especialidades));
        return response()->json($return);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $return = false;
        $medico = Medico::find($id);
        if( $medico ) {
            $return = $medico->delete();
        }
        return response()->json($return);
    }
}
