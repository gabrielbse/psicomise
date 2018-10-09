<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TipoExtrato;

class tipoExtratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo_extratos = tipoExtrato::orderBy('id','DESC')->paginate(5);
        return view('tipoExtrato.index',compact('tipo_extratos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoExtrato.create');
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
            'nome_extrato' => 'required|min:3',
        ]);

        tipoExtrato::create($request->all());

        return redirect()->route('tipo_extrato.index')
                        ->with('success','tipo_extratos de Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo_extratos = tipoExtrato::find($id);
        return view('tipoExtrato.show',compact('tipo_extratos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_extratos = tipoExtrato::find($id);
        return view('tipoExtrato.edit',compact('tipo_extratos'));
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
            'nome_extrato' => 'required|min:3',
        ]);

        tipoExtrato::find($id)->update($request->all());

        return redirect()->route('tipo_extrato.index')
                        ->with('success','Tipo de extratos da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tipoExtrato::find($id)->delete();
        return redirect()->route('tipo_extrato.index')
                        ->with('success','Tipo de extrato de Planta excluída com sucesso!');
    }
}