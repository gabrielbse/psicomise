<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AvaliacaoToxidadeAguda;
use App\ToxidadeAguda;
use App\experimento;
use App\animal;

class avaliacaoToxidadeAgudaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {

        $avaliacaotoxidadeagudas  = avaliacaotoxidadeaguda::paginate(5);
    
        return view('avaliacaotoxidadeaguda.index', compact('avaliacaotoxidadeagudas'))
                        ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $experimentos = experimento::lists('nome_experimento', 'id');
        $animals = animal::lists('identificacao_do_animal', 'id');
       
        return view('avaliacaoToxidadeAguda.create', compact('avaliacaoToxidadeAguda','experimentos','animals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        // dd($request->all());

        $this->validate($request, [
            'fk_animal' => 'required',
            'tempo_minuto_avaliacao' => 'required',
            'data_avaliacao' => 'required',
            'fk_experimento' => 'required',
            'peso_animal_no_dia' => 'required',
            'bloqueio_nas_narinas' => 'required',  
            'dispineia' => 'required',
            'apneia' => 'required',
            'cianose' => 'required',
            'atividade_motora' => 'required',
            'sonolencia' => 'required',
            'reflexo_e_resposta_a_dor' => 'required', 
            'catalepsia' => 'required',  
            'ataxia' => 'required',
            'prostacao' => 'required',
            'tremores' => 'required',
            'fechamento_palpebra' => 'required',
            'retrair_pata' => 'required',
            'constricao_pupila_com_luz' => 'required',
            'resposta_estimulo' => 'required',  
            'lacrimejamento' => 'required',
            'constricao_pupila_sem_luz' => 'required',
            'retracao_olho' => 'required',
            'queda_palpebra' => 'required',
            'cornea_opaca' => 'required',
            'bradicardia' => 'required', 
            'taquicardia' => 'required',
            'arritmia' => 'required',
            'vasocontricao_ou_dialatacao' => 'required',
            'hipotonia' => 'required',  
            'hipertonia' => 'required',
            'fezes' => 'required',
            'diarreia' => 'required',
            'vomito' => 'required',
            'miccao_involuntaria' => 'required',
            'urina_vermelha' => 'required', 
            'edema' => 'required',
            'avermelhamento_pele' => 'required',
            'convulsoes' => 'required',
            'salivacao' => 'required',  
            'forca_para_agarrar' => 'required',
            'miccao' => 'required',
            'piloerecao' => 'required',
            'respiracao' => 'required',
            'analgesia' => 'required',
            'observacao',

        ]);

        $avaliacaotoxidadeaguda = new AvaliacaoToxidadeAguda();
        $avaliacaotoxidadeaguda->fk_animal = $request->fk_animal;
        $avaliacaotoxidadeaguda->tempo_minuto_avaliacao = $request->tempo_minuto_avaliacao;
        $avaliacaotoxidadeaguda->data_avaliacao = $request->data_avaliacao;
        $avaliacaotoxidadeaguda->fk_experimento = $request->fk_experimento;
        $avaliacaotoxidadeaguda->peso_animal_no_dia = $request->peso_animal_no_dia;
        
        $toxidadeaguda = new ToxidadeAguda();
        $toxidadeaguda->bloqueio_nas_narinas = $request->bloqueio_nas_narinas;
        $toxidadeaguda->dispineia = $request->dispineia;
        $toxidadeaguda->apneia = $request->apneia;
        $toxidadeaguda->cianose = $request->cianose;
        $toxidadeaguda->atividade_motora = $request->atividade_motora;
        $toxidadeaguda->sonolencia = $request->sonolencia;
        $toxidadeaguda->reflexo_e_resposta_a_dor = $request->reflexo_e_resposta_a_dor;
        $toxidadeaguda->catalepsia = $request->catalepsia;
        $toxidadeaguda->ataxia = $request->ataxia;
        $toxidadeaguda->prostacao = $request->prostacao;
        $toxidadeaguda->tremores = $request->tremores;
        $toxidadeaguda->fechamento_palpebra = $request->fechamento_palpebra;
        $toxidadeaguda->retrair_pata = $request->retrair_pata;
        $toxidadeaguda->constricao_pupila_com_luz = $request->constricao_pupila_com_luz;
        $toxidadeaguda->resposta_estimulo = $request->resposta_estimulo;
        $toxidadeaguda->lacrimejamento = $request->lacrimejamento;
        $toxidadeaguda->constricao_pupila_sem_luz = $request->constricao_pupila_sem_luz;
        $toxidadeaguda->retracao_olho = $request->retracao_olho;
        $toxidadeaguda->queda_palpebra = $request->queda_palpebra;
        $toxidadeaguda->cornea_opaca = $request->cornea_opaca;
        $toxidadeaguda->bradicardia = $request->bradicardia;
        $toxidadeaguda->taquicardia = $request->taquicardia;
        $toxidadeaguda->arritmia = $request->arritmia;
        $toxidadeaguda->vasocontricao_ou_dialatacao = $request->vasocontricao_ou_dialatacao;
        $toxidadeaguda->hipotonia = $request->hipotonia;
        $toxidadeaguda->hipertonia = $request->hipertonia;
        $toxidadeaguda->fezes = $request->fezes;
        $toxidadeaguda->diarreia = $request->diarreia;
        $toxidadeaguda->vomito = $request->vomito;
        $toxidadeaguda->miccao_involuntaria = $request->miccao_involuntaria;
        $toxidadeaguda->urina_vermelha = $request->urina_vermelha;
        $toxidadeaguda->edema = $request->edema;
        $toxidadeaguda->avermelhamento_pele = $request->avermelhamento_pele;
        $toxidadeaguda->convulsoes = $request->convulsoes;
        $toxidadeaguda->salivacao = $request->salivacao;
        $toxidadeaguda->forca_para_agarrar = $request->forca_para_agarrar;
        $toxidadeaguda->miccao = $request->miccao;
        $toxidadeaguda->piloerecao = $request->piloerecao;
        $toxidadeaguda->respiracao = $request->respiracao;
        $toxidadeaguda->analgesia = $request->analgesia;
        $toxidadeaguda->observacao = $request->observacao;
        
        $avaliacaotoxidadeaguda->save();

        $toxidadeaguda->fk_avaliacao_toxidade_aguda = $avaliacaotoxidadeaguda->id;
        $toxidadeaguda->save();


        return redirect()->route('avaliacaoToxidadeAguda.index')
                        ->with('success', 'Avaliacao Toxidade Aguda cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id) {
        $avaliacaoToxidadeAgudas = avaliacaoToxidadeAguda::find($id);
        return view('avaliacaoToxidadeAguda.show',compact('avaliacaoToxidadeAgudas'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $avaliacaoToxidadeAgudas = avaliacaoToxidadeAguda::find($id);
        $experimentos = experimento::lists('nome_experimento', 'id');
        $animals = animal::lists('identificacao_do_animal', 'id');
       
        return view('avaliacaoToxidadeAguda.edit', compact('avaliacaoToxidadeAguda','experimentos','animals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $this->validate($request, [
            'bloqueio_nas_narinas' => 'required',  
            'dispineia' => 'required',
            'apneia' => 'required',
            'cianose' => 'required',
            'atividade_motora' => 'required',
            'sonolencia' => 'required',
            'reflexo_e_resposta_a_dor' => 'required', 
            'catalepsia' => 'required',  
            'ataxia' => 'required',
            'prostacao' => 'required',
            'tremores' => 'required',
            'fechamento_palpebra' => 'required',
            'retrair_pata' => 'required',
            'constricao_pupila_com_luz' => 'required',
            'resposta_estimulo' => 'required',  
            'lacrimejamento' => 'required',
            'constricao_pupila_sem_luz' => 'required',
            'retracao_olho' => 'required',
            'queda_palpebra' => 'required',
            'cornea_opaca' => 'required',
            'bradicardia' => 'required', 
            'taquicardia' => 'required',
            'arritmia' => 'required',
            'vasocontricao_ou_dialatacao' => 'required',
            'hipotonia' => 'required',  
            'hipertonia' => 'required',
            'fezes' => 'required',
            'diarreia' => 'required',
            'vomito' => 'required',
            'miccao_involuntaria' => 'required',
            'urina_vermelha' => 'required', 
            'edema' => 'required',
            'avermelhamento_pele' => 'required',
            'convulsoes' => 'required',
            'salivacao' => 'required',  
            'forca_para_agarrar' => 'required',
            'miccao' => 'required',
            'piloerecao' => 'required',
            'respiracao' => 'required',
            'analgesia' => 'required',
            'observacao' => 'required', 
            'fk_avaliacao_toxidade_aguda' => 'required',

        ]);

         avaliacaoToxidadeAguda::find($id)->update($request->all());

        return redirect()->route('avaliacaoToxidadeAguda.index')
                        ->with('success','Avaliação atualizada com sucesso');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        avaliacaoToxidadeAguda::find($id)->delete();
        return redirect()->route('avaliacaoToxidadeAguda.index')
                        ->with('success','Avaliação excluída com sucesso!');
    }

}
