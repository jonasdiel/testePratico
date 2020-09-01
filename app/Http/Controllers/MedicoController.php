<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\MedicoApiController;
use App\Medico;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function GuzzleHttp\json_decode;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $resquest)
    {
        $busca = $resquest->get('busca');
        //Consome API /medico
        $response = Http::withToken('token')->get(env('APP_URL').'/api/medico', ['busca' => $busca]);
        return view('medico.index', ['dados' => $response->json()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Salva mpedico
        $request = Http::withToken('token')->post(env('APP_URL').'/api/medico', $request->all());
        //Obtém dados salvos
        $dados = Http::withToken('token')->get(env('APP_URL').'/api/medico');

        return view('medico.index', ['dados' => $dados->json()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //Consome API Salvar médico
        $response = Http::withToken('token')->get(env('APP_URL').'/api/medico/'.$medico->id);

        return view('medico.edit', ['dados' => $response->json()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //Salva médico
        $response = Http::withToken('token')->put(env('APP_URL').'/api/medico/'.$medico->id, $request->all());

        //Obtém dados salvos
        $dados = Http::withToken('token')->get(env('APP_URL').'/api/medico');

        return view('medico.index', ['dados' => $dados->json()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {

    }
}
