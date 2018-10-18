@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<br>
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left" style="margin-left: 1%">
            Avaliação Triagem Farmacologica Comportamental
        </div>
        @endsection     
        <div class="pull-right" style="margin-right: 3%">
            <a class="btn btn-primary" href="{{ route('avaliacaoTriagemFarmacologica.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::open(array('route' => 'avaliacaoTriagemFarmacologica.store','method'=>'POST')) !!}
<br>
<div class="box box-primary" style="margin-left: 3%; margin-right: 3%; width: 94%;">
    <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <fieldset>
                    <legend>Cabeçalho da Avaliacao </legend>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Animal:</strong>
                            {!! Form::select('fk_animal', $animals, null, array('class' => 'form-control')) !!}
                        </div>                
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Minuto da avaliação:</strong><br>
                            {!! Form::select('tempo_minuto_avaliacao', array('30', '60','120', '180', '240'), array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-2">
                        <div class="form-group">
                            <strong>Data da avaliação:</strong>
                            {!! Form::date('data_avaliacao', null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Experimento:</strong>
                            {!! Form::select('fk_experimento', $experimentos, null, array('class' => 'form-control')) !!}
                        </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <strong>Peso do Animal Hoje:</strong>
                            {!! Form::number('peso_animal_dia', null, null, array('class' => 'form-control')) !!}
                          </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Agressividade: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('agressividade', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('agressividade', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('agressividade', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('agressividade', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Ambulação aumentada: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_aumentada', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_aumentada', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_aumentada', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_aumentada', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Andar em circulo: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('andar_em_circulo', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('andar_em_circulo', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('andar_em_circulo', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('andar_em_circulo', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Auto limpeza: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('auto_limpeza', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('auto_limpeza', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('auto_limpeza', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('auto_limpeza', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Bocejo: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bocejo', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bocejo', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bocejo', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bocejo', '3') !!} ++
                            </div>  
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Contorcoes abdominais: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('contorcoes_abdominais', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('contorcoes_abdominais', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('contorcoes_abdominais', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('contorcoes_abdominais', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Convulsoes: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('convulsoes', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('convulsoes', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('convulsoes', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('convulsoes', '3') !!} ++
                            </div>
                        </div>
                </div>        
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Escalar: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('escalar', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('escalar', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('escalar', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('escalar', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Estereotipia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('estereotipia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('estereotipia', '1') !!} -
                                </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('estereotipia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('estereotipia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">        
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Irritabilidade: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('irritabilidade', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('irritabilidade', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('irritabilidade', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('irritabilidade', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">    
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Levantar: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('levantar', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('levantar', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('levantar', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('levantar', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                         <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Movimentação Intensa das Vibrissas: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('movimentacao_intensa_das_vibrissas', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('movimentacao_intensa_das_vibrissas', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('movimentacao_intensa_das_vibrissas', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('movimentacao_intensa_das_vibrissas', '3') !!} ++
                            </div>
                        </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-12">     
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Pedalar: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('pedalar', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('pedalar', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('pedalar', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('pedalar', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Sacudir a cabeça: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sacudir_a_cabeca', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sacudir_a_cabeca', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sacudir_a_cabeca', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sacudir_a_cabeca', '3') !!} ++
                            </div>
                        </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                            <strong>Saltos: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('saltos', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('saltos', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('saltos', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('saltos', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Tremores: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tremores', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tremores', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tremores', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tremores', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Vocalização: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vocalizacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vocalizacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vocalizacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vocalizacao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Abdução das patas do trem posterior: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('abducao_das_patas_do_trem_posterior', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('abducao_das_patas_do_trem_posterior', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('abducao_das_patas_do_trem_posterior', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('abducao_das_patas_do_trem_posterior', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Ambulação diminuida: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_diminuida', '0', true) !!} 0
                            </div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_diminuida', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_diminuida', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ambulacao_diminuida', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Analgesia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('analgesia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('analgesia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('analgesia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('analgesia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Anestesia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('anestesia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('anestesia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('anestesia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('anestesia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Ataxia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ataxia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ataxia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ataxia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ataxia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Catatonia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('catatonia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('catatonia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('catatonia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('catatonia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Cauda de Straub: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cauda_de_straub', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cauda_de_straub', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cauda_de_straub', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cauda_de_straub', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Hipnose: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipnose', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipnose', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipnose', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipnose', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Perda do reflexo auricular: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_auricular', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_auricular', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_auricular', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_auricular', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Perda do reflexo corneal: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_corneal', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_corneal', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_corneal', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('perda_do_reflexo_corneal', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Ptose palpebral: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ptose_palpebral', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ptose_palpebral', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ptose_palpebral', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('ptose_palpebral', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Reflexo de endireitamento: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_de_endireitamento', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_de_endireitamento', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_de_endireitamento', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_de_endireitamento', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Resposta ao toque diminuida: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_ao_toque_diminuida', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_ao_toque_diminuida', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_ao_toque_diminuida', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_ao_toque_diminuida', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Sedação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sedacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sedacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sedacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sedacao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Cianose: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cianose', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cianose', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cianose', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cianose', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Constipação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constipacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constipacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constipacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constipacao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Defecação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('defecacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('defecacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('defecacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('defecacao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                         <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Diarréia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('diarreia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('diarreia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('diarreia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('diarreia', '3') !!} ++   
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Força para agarrar: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('forca_para_agarrar', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('forca_para_agarrar', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('forca_para_agarrar', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('forca_para_agarrar', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Lacrimejamento: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('lacrimejamento', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('lacrimejamento', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('lacrimejamento', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('lacrimejamento', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Micção: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('miccao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('miccao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('miccao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('miccao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Piloereção: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('piloerecao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('piloerecao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('piloerecao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('piloerecao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Respiracao: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('respiracao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('respiracao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('respiracao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('respiracao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Salivação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('salivacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('salivacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('salivacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('salivacao', '3') !!} ++
                            </div>
                        </div> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Tônus muscular: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tonus_muscular', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tonus_muscular', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tonus_muscular', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('tonus_muscular', '3') !!} ++
                            </div>
                        </div> 
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Mortes: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('mortes', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('mortes', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('mortes', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('mortes', '3') !!} ++
                            </div>
                        </div> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Observacões:</strong>
                            {!! Form::textarea('observacao', null, array('class' => 'form-control', 'size'=>'10x5')) !!}                
                         </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection