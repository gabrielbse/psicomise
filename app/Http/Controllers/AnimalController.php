<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Animal;
use App\GrupoExperimento;
class animalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $animals = animal::orderBy('id','DESC')->paginate(5);
        return view('animal.index',compact('animals'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupo_experimentos = grupoExperimento::lists('nome_grupo_experimento', 'id');
       
        return view('animal.create', compact('animal','grupo_experimentos'));
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
            'identificacao_do_animal' => 'required',
            'idade_animal' => 'required',
            'sexo_animal' => 'required',
            'fk_grupo_experimento' => 'required',
        ]);

        animal::create($request->all());

        return redirect()->route('animal.index')
                        ->with('success','Animal cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animals = animal::find($id);
        return view('animal.show',compact('animals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = animal::find($id);
        $grupo_experimentos = grupoExperimento::lists('nome_grupo_experimento', 'id');
       
        return view('animal.edit', compact('animal','grupo_experimentos'));
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
            'identificacao_do_animal' => 'required',
            'idade_animal' => 'required',
            'sexo_animal' => 'required',
            'fk_grupo_experimento' => 'required',
        ]);

        animal::find($id)->update($request->all());

        return redirect()->route('animal.index')
                        ->with('success','Animal atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        animal::find($id)->delete();
        return redirect()->route('animal.index')
                        ->with('success','Animal excluído com sucesso!');
    }
}