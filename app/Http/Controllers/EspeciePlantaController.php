<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EspeciePlanta;

class especiePlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $especies = especiePlanta::orderBy('id','DESC')->paginate(5);
        return view('especiePlanta.index',compact('especies'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especiePlanta.create');
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
            'nome_especie_planta' => 'required|min:5',
        ]);

        especiePlanta::create($request->all());

        return redirect()->route('especie.index')
                        ->with('success','especie de Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especie = especiePlanta::find($id);
        return view('especiePlanta.show',compact('especie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especie = especiePlanta::find($id);
        return view('especiePlanta.edit',compact('especie'));
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
            'nome_especie_planta' => 'required|min:5',
        ]);

        especiePlanta::find($id)->update($request->all());

        return redirect()->route('especie.index')
                        ->with('success','especie da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        especiePlanta::find($id)->delete();
        return redirect()->route('especie.index')
                        ->with('success','especie de Planta excluída com sucesso!');
    }
}