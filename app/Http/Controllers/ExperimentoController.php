<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Experimento;
use App\ParteDaPlanta;
use App\ViaAdministracao;
use App\TipoExtrato;
use App\Planta;

class experimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $experimentos = Experimento::orderBy('id','DESC')->paginate(5);
        return view('experimento.index',compact('experimentos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $via_de_administracao = viaAdministracao::lists('nome_via_administracao', 'id');
        $planta = Planta::lists('nome_planta', 'id');
        $parte_da_planta = ParteDaPlanta::lists('parte_da_planta', 'id');
        $tipo_extrato = tipoExtrato::lists('nome_extrato', 'id');

        return view('experimento.create', compact('via_de_administracao','planta', 'parte_da_planta', 
            'tipo_extrato'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'nome_experimento' => 'required',
            'dose' => 'required',
            'fk_via_de_administracao' => 'required',
            'fk_parte_da_planta' => 'required',
            'fk_tipo_extrato' => 'required',
            'peso_referencia' => 'required',
            'fk_planta' => 'required',
        ]);

        $input = $request->all();


        if($input['dose_farmaco'] == ""){
            $input['dose_farmaco'] = 0.0;
        }
      

        experimento::create($input);

        return redirect()->route('experimento.index')
                        ->with('success','Experimento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experimento = experimento::find($id);
        return view('experimento.show',compact('experimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $experimento = Experimento::find($id);
        if($experimento->dose_farmaco == 0){
            $experimento->dose_farmaco = "";
        }
        $via_de_administracao = viaAdministracao::lists('nome_via_administracao', 'id');
        $planta = Planta::lists('nome_planta', 'id');
        $parte_da_planta = ParteDaPlanta::lists('parte_da_planta', 'id');
        $tipo_extrato = tipoExtrato::lists('nome_extrato', 'id');

        return view('experimento.edit', compact('experimento','via_de_administracao','planta', 'parte_da_planta','tipo_extrato'));
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
        $this->validate($request, [
            'nome_experimento' => 'required',
            'dose' => 'required',
            'fk_via_de_administracao' => 'required',
            'fk_parte_da_planta' => 'required',
            'fk_tipo_extrato' => 'required',
            'peso_referencia' => 'required',
            'fk_planta' => 'required',
        ]);

        experimento::find($id)->update($request->all());

        return redirect()->route('experimento.index')
                        ->with('success','Experimento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        experimento::find($id)->delete();
        return redirect()->route('experimento.index')
                        ->with('success','Experimento excluído com sucesso!');
    }
}