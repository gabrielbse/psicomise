<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Planta;
use App\EspeciePlanta;
use App\GeneroPlanta;
use App\FamiliaPlanta; 

class plantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plantas = Planta::orderBy('id','DESC')->paginate(5);
        return view('planta.index',compact('plantas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genero_planta = generoPlanta::lists('nome_genero_planta', 'id');
        $especie_planta = especiePlanta::lists('nome_especie_planta', 'id');
        $familia_planta = familiaPlanta::lists('nome_familia_planta', 'id');
       
        return view('planta.create', compact('genero_planta','especie_planta', 'familia_planta'));
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
            'nome_planta' => 'required|min:5',
        ]);

        //dd($request->all());

        planta::create($request->all());

        return redirect()->route('planta.index')
                        ->with('success','Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plantas = planta::find($id);
        return view('planta.show',compact('plantas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta = Planta::find($id);
        $genero_planta = generoPlanta::lists('nome_genero_planta', 'id');
        $especie_planta = especiePlanta::lists('nome_especie_planta', 'id');
        $familia_planta = familiaPlanta::lists('nome_familia_planta', 'id');
       
        return view('planta.edit', compact('planta','genero_planta','especie_planta', 'familia_planta'));
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
            'nome_planta' => 'required|min:5',
        ]);

        planta::find($id)->update($request->all());

        return redirect()->route('planta.index')
                        ->with('success','Planta atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        planta::find($id)->delete();
        return redirect()->route('planta.index')
                        ->with('success','Planta excluído com sucesso!');
    }
}