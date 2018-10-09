<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GeneroPlanta;

class generoPlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $generos = generoPlanta::orderBy('id','DESC')->paginate(5);
        return view('generoPlanta.index',compact('generos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generoPlanta.create');
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
            'nome_genero_planta' => 'required|min:5',
        ]);

        generoPlanta::create($request->all());

        return redirect()->route('genero.index')
                        ->with('success','Genero de Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $generos = generoPlanta::find($id);
        return view('generoPlanta.show',compact('generos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genero = generoPlanta::find($id);
        return view('generoPlanta.edit',compact('genero'));
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
            'nome_genero_planta' => 'required|min:5',
        ]);

        generoPlanta::find($id)->update($request->all());

        return redirect()->route('genero.index')
                        ->with('success','Genero da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        generoPlanta::find($id)->delete();
        return redirect()->route('genero.index')
                        ->with('success','Genero da Planta excluída com sucesso!');
    }
}