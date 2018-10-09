<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\FamiliaPlanta;

class familiaPlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $familias = familiaPlanta::orderBy('id','DESC')->paginate(5);
        return view('familiaPlanta.index',compact('familias'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('familiaPlanta.create');
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
            'nome_familia_planta' => 'required|min:5',
        ]);

        familiaPlanta::create($request->all());

        return redirect()->route('familia.index')
                        ->with('success','Familia de Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familias = familiaPlanta::find($id);
        return view('familiaPlanta.show',compact('familias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $familia = familiaPlanta::find($id);
        return view('familiaPlanta.edit',compact('familia'));
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
            'nome_familia_planta' => 'required|min:5',
        ]);

        familiaPlanta::find($id)->update($request->all());

        return redirect()->route('familia.index')
                        ->with('success','Familia da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        familiaPlanta::find($id)->delete();
        return redirect()->route('familia.index')
                        ->with('success','Familia de Planta excluída com sucesso!');
    }
}