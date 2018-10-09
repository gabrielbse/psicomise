<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\parteDaPlanta;

class partePlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $parte_plantas = parteDaPlanta::orderBy('id','DESC')->paginate(5);
        return view('parteDaPlanta.index',compact('parte_plantas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parteDaPlanta.create');
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
            'parte_da_planta' => 'required|min:3',
        ]);

        parteDaPlanta::create($request->all());

        return redirect()->route('parte_planta.index')
                        ->with('success','Parte da Planta de Planta cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parte_planta = parteDaPlanta::find($id);
        return view('parteDaPlanta.show',compact('parte_planta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parte_da_planta = parteDaPlanta::find($id);
        return view('parteDaPlanta.edit',compact('parte_da_planta'));
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
            'parte_da_planta' => 'required|min:3',
        ]);

        parteDaPlanta::find($id)->update($request->all());

        return redirect()->route('parte_planta.index')
                        ->with('success','Parte da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        parteDaPlanta::find($id)->delete();
        return redirect()->route('parte_planta.index')
                        ->with('success','Parte da Planta excluída com sucesso!');
    }
}