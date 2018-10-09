<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AvaliacaoTriagemFarmacologica;
use App\TriagemFarmacologicaComportamental;
use App\Experimento;
use App\Animal;
class avaliacaoTriagemFarmacologicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $avaliacaoTriagemFarmacologicas = avaliacaoTriagemFarmacologica::paginate(5);
        
        return view('avaliacaoTriagemFarmacologica.index',compact('avaliacaoTriagemFarmacologicas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $experimentos = experimento::lists('nome_experimento', 'id');
        $animals = animal::lists('identificacao_do_animal', 'id');
       
        return view('avaliacaoTriagemFarmacologica.create', compact('avaliacaoTriagemFarmacologica','experimentos','animals'));
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
          'fk_animal' => 'required',
          'tempo_minuto_avaliacao' => 'required',
          'data_avaliacao' => 'required',
          'fk_experimento' => 'required',
          'peso_animal_dia' => 'required',
          'agressividade' => 'required',
          'ambulacao_aumentada' => 'required',
          'andar_em_circulo' => 'required',
          'auto_limpeza' => 'required',
          'bocejo' => 'required',
          'contorcoes_abdominais' => 'required',
          'convulsoes' => 'required',
          'escalar' => 'required',
          'estereotipia' => 'required',
          'irritabilidade' => 'required',
          'levantar' => 'required',
          'movimentacao_intensa_das_vibrissas' => 'required',
          'pedalar' => 'required',
          'sacudir_a_cabeca' => 'required',
          'saltos' => 'required',
          'tremores' => 'required',
          'vocalizacao' => 'required', 
          'abducao_das_patas_do_trem_posterior' => 'required',
          'ambulacao_diminuida' => 'required',
          'analgesia' => 'required',
          'anestesia' => 'required',
          'ataxia' => 'required',
          'catatonia' => 'required',
          'cauda_de_straub' => 'required',
          'hipnose' => 'required',
          'perda_do_reflexo_auricular' => 'required',
          'perda_do_reflexo_corneal' => 'required',
          'ptose_palpebral' => 'required',
          'reflexo_de_endireitamento' => 'required',
          'resposta_ao_toque_diminuida' => 'required',
          'sedacao' => 'required',
          'cianose' => 'required',
          'constipacao' => 'required',
          'defecacao' => 'required',
          'diarreia' => 'required',
          'forca_para_agarrar' => 'required',
          'lacrimejamento' => 'required',
          'miccao' => 'required',
          'piloerecao' => 'required',
          'respiracao' => 'required',
          'salivacao' => 'required',
          'tonus_muscular' => 'required',
          'mortes' => 'required',
          'observacao',
        ]);

        $avaliacaotriagemfarmacologica = new avaliacaotriagemfarmacologica();
        $avaliacaotriagemfarmacologica->fk_animal = $request->fk_animal;
        $avaliacaotriagemfarmacologica->tempo_minuto_avaliacao = $request->tempo_minuto_avaliacao;
        $avaliacaotriagemfarmacologica->data_avaliacao = $request->data_avaliacao;
        $avaliacaotriagemfarmacologica->fk_experimento = $request->fk_experimento;
        $avaliacaotriagemfarmacologica->peso_animal_dia = $request->peso_animal_dia;


        $triagemfarmacologica = new TriagemFarmacologicaComportamental();
        $triagemfarmacologica->agressividade = $request->agressividade;
        $triagemfarmacologica->ambulacao_aumentada = $request->ambulacao_aumentada;
        $triagemfarmacologica->andar_em_circulo = $request->andar_em_circulo;
        $triagemfarmacologica->auto_limpeza = $request->auto_limpeza;
        $triagemfarmacologica->bocejo = $request->bocejo;
        $triagemfarmacologica->contorcoes_abdominais = $request->contorcoes_abdominais;
        $triagemfarmacologica->convulsoes = $request->convulsoes;
        $triagemfarmacologica->escalar = $request->escalar;
        $triagemfarmacologica->estereotipia = $request->estereotipia;
        $triagemfarmacologica->irritabilidade = $request->irritabilidade;
        $triagemfarmacologica->levantar = $request->levantar;
        $triagemfarmacologica->movimentacao_intensa_das_vibrissas = $request->movimentacao_intensa_das_vibrissas;
        $triagemfarmacologica->pedalar = $request->pedalar;
        $triagemfarmacologica->sacudir_a_cabeca = $request->sacudir_a_cabeca;
        $triagemfarmacologica->saltos = $request->saltos;
        $triagemfarmacologica->tremores = $request->tremores;
        $triagemfarmacologica->vocalizacao = $request->vocalizacao;
        $triagemfarmacologica->abducao_das_patas_do_trem_posterior = $request->abducao_das_patas_do_trem_posterior;
        $triagemfarmacologica->ambulacao_diminuida = $request->ambulacao_diminuida;
        $triagemfarmacologica->analgesia = $request->analgesia;
        $triagemfarmacologica->anestesia = $request->anestesia;
        $triagemfarmacologica->ataxia = $request->ataxia;
        $triagemfarmacologica->catatonia = $request->catatonia;
        $triagemfarmacologica->cauda_de_straub = $request->cauda_de_straub;
        $triagemfarmacologica->hipnose = $request->hipnose;
        $triagemfarmacologica->perda_do_reflexo_auricular = $request->perda_do_reflexo_auricular;
        $triagemfarmacologica->perda_do_reflexo_corneal = $request->perda_do_reflexo_corneal;
        $triagemfarmacologica->ptose_palpebral = $request->ptose_palpebral;
        $triagemfarmacologica->reflexo_de_endireitamento = $request->reflexo_de_endireitamento;
        $triagemfarmacologica->resposta_ao_toque_diminuida = $request->resposta_ao_toque_diminuida;
        $triagemfarmacologica->sedacao = $request->sedacao;
        $triagemfarmacologica->cianose = $request->cianose;
        $triagemfarmacologica->constipacao = $request->constipacao;
        $triagemfarmacologica->defecacao = $request->defecacao;
        $triagemfarmacologica->diarreia = $request->diarreia;
        $triagemfarmacologica->forca_para_agarrar = $request->forca_para_agarrar;
        $triagemfarmacologica->lacrimejamento = $request->lacrimejamento;
        $triagemfarmacologica->miccao = $request->miccao;
        $triagemfarmacologica->piloerecao = $request->piloerecao;
        $triagemfarmacologica->respiracao = $request->respiracao;
        $triagemfarmacologica->salivacao = $request->salivacao;
        $triagemfarmacologica->tonus_muscular = $request->tonus_muscular;
        $triagemfarmacologica->mortes = $request->mortes;
        $triagemfarmacologica->observacao = $request->observacao;


        $avaliacaotriagemfarmacologica->save();

        $triagemfarmacologica->fk_avaliacao_triagem_farmacologica = $avaliacaotriagemfarmacologica->id;
        $triagemfarmacologica->save();

        return redirect()->route('avaliacaoTriagemFarmacologica.index')
                        ->with('success','Avaliação de Triagem Farmacolodica Comportamental cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avaliacaoTriagemFarmacologicas = avaliacaoTriagemFarmacologica::find($id);
        return view('avaliacaoTriagemFarmacologica.show',compact('avaliacaoTriagemFarmacologicas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avaliacaoTriagemFarmacologicas = avaliacaoTriagemFarmacologica::find($id);
        $experimentos = experimento::lists('nome_experimento', 'id');
        $animals = animal::lists('identificacao_do_animal', 'id');
       
        return view('avaliacaoTriagemFarmacologica.edit', compact('avaliacaoTriagemFarmacologica','experimentos','animals'));
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
          'fk_animal' => 'required',
          'tempo_minuto_avaliacao' => 'required',
          'data_avaliacao' => 'required',
          'fk_experimento' => 'required',
          'peso_animal_dia' => 'required',
          'agressividade' => 'required',
          'ambulacao_aumentada' => 'required',
          'andar_em_circulo' => 'required',
          'auto_limpeza' => 'required',
          'bocejo' => 'required',
          'contorcoes_abdominais' => 'required',
          'convulsoes' => 'required',
          'escalar' => 'required',
          'estereotipia' => 'required',
          'irritabilidade' => 'required',
          'levantar' => 'required',
          'movimentacao_intensa_das_vibrissas' => 'required',
          'pedalar' => 'required',
          'sacudir_a_cabeca' => 'required',
          'saltos' => 'required',
          'tremores' => 'required',
          'vocalizacao' => 'required', 
          'abducao_das_patas_do_trem_posterior' => 'required',
          'ambulacao_diminuida' => 'required',
          'analgesia' => 'required',
          'anestesia' => 'required',
          'ataxia' => 'required',
          'catatonia' => 'required',
          'cauda_de_straub' => 'required',
          'hipnose' => 'required',
          'perda_do_reflexo_auricular' => 'required',
          'perda_do_reflexo_corneal' => 'required',
          'ptose_palpebral' => 'required',
          'reflexo_de_endireitamento' => 'required',
          'resposta_ao_toque_diminuida' => 'required',
          'sedacao' => 'required',
          'cianose' => 'required',
          'constipacao' => 'required',
          'defecacao' => 'required',
          'diarreia' => 'required',
          'forca_para_agarrar' => 'required',
          'lacrimejamento' => 'required',
          'miccao' => 'required',
          'piloerecao' => 'required',
          'respiracao' => 'required',
          'salivacao' => 'required',
          'tonus_muscular' => 'required',
          'mortes' => 'required',
          'observacao' => 'required',
          'fk_avaliacao_triagem_farmacologica' => 'required',
        ]);

        avaliacaoTriagemFarmacologica::find($id)->update($request->all());

        return redirect()->route('avaliacaoTriagemFarmacologica.index')
                        ->with('success','Avaliação atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        avaliacaoTriagemFarmacologica::find($id)->delete();
        return redirect()->route('avaliacaoTriagemFarmacologica.index')
                        ->with('success','Avaliação excluída com sucesso!');
    }
}