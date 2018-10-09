<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViaAdministracao;

class viaAdministracaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $via_administracaos = viaAdministracao::orderBy('id','DESC')->paginate(5);
        return view('viaAdministracao.index',compact('via_administracaos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viaAdministracao.create');
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
            'nome_via_administracao' => 'required|min:3',
        ]);

        viaAdministracao::create($request->all());

        return redirect()->route('via_administracao.index')
                        ->with('success','Via de Adminisração cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $via_administracao = viaAdministracao::find($id);
        return view('viaAdministracao.show',compact('via_administracao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $via_administracao = viaAdministracao::find($id);
        return view('viaAdministracao.edit',compact('via_administracao'));
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
            'nome_via_administracao' => 'required|min:3',
        ]);

        viaAdministracao::find($id)->update($request->all());

        return redirect()->route('via_administracao.index')
                        ->with('success','via_administracao da Planta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        viaAdministracao::find($id)->delete();
        return redirect()->route('via_administracao.index')
                        ->with('success','Via de Adminisração  excluída com sucesso!');
    }
}