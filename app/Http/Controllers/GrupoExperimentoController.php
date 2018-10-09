<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GrupoExperimento;

class grupoExperimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grupoExperimentos = grupoExperimento::orderBy('id','DESC')->paginate(5);
        return view('grupoExperimento.index',compact('grupoExperimentos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupoExperimento.create');
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
            'nome_grupo_experimento' => 'required|min:5',
        ]);

        grupoExperimento::create($request->all());

        return redirect()->route('grupoExperimento.index')
                        ->with('success','Grupo do Experimento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupoExperimentos = grupoExperimento::find($id);
        return view('grupoExperimento.show',compact('grupoExperimentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupoExperimento = grupoExperimento::find($id);
        return view('grupoExperimento.edit',compact('grupoExperimento'));
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
            'nome_grupo_experimento' => 'required|min:5',
        ]);

        grupoExperimento::find($id)->update($request->all());

        return redirect()->route('grupoExperimento.index')
                        ->with('success','Grupo do Experimento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        grupoExperimento::find($id)->delete();
        return redirect()->route('grupoExperimento.index')
                        ->with('success','Grupo do Experimento excluído com sucesso!');
    }
}