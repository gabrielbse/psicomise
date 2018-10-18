@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left" style="margin-left: 1%">
            Avaliação Toxidade Aguda
        </div>
        @endsection     
        <div class="pull-right" style="margin-right: 3%">
            <a class="btn btn-primary" href="{{ route('avaliacaoToxidadeAguda.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'avaliacaoToxidadeAguda.store','method'=>'POST')) !!}
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

                    <div class="col-sm-4 col-md-4">
                        <div class="form-group">
                            <strong>Peso do Animal Hoje:</strong>
                            {!! Form::number('peso_animal_no_dia', null, null, array('class' => 'form-control')) !!}
                          </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Bloqueio nas narinas: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bloqueio_nas_narinas', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bloqueio_nas_narinas', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bloqueio_nas_narinas', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bloqueio_nas_narinas', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Dispinéia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('dispineia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('dispineia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('dispineia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('dispineia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Apneia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('apneia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('apneia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('apneia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('apneia', '3') !!} ++
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
                                <strong>Atividade Motora: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('atividade_motora', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('atividade_motora', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('atividade_motora', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('atividade_motora', '3') !!} ++
                            </div>  
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Sonolência: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sonolencia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sonolencia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sonolencia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('sonolencia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Reflexo e resposta a dor: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_e_resposta_a_dor', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_e_resposta_a_dor', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_e_resposta_a_dor', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('reflexo_e_resposta_a_dor', '3') !!} ++
                            </div>
                        </div>
                </div>        
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Catalepsia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('catalepsia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('catalepsia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('catalepsia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('catalepsia', '3') !!} ++
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
                                <strong>Prostação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('prostacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('prostacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('prostacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('prostacao', '3') !!} ++
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
                                <strong>Fechamento palpebra: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fechamento_palpebra', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fechamento_palpebra', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fechamento_palpebra', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fechamento_palpebra', '3') !!} ++
                            </div>
                        </div>
                </div>    
                <div class="col-xs-12 col-sm-12 col-md-12">     
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Retrair pata: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retrair_pata', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retrair_pata', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retrair_pata', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retrair_pata', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Constrição pupila com luz: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_com_luz', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_com_luz', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_com_luz', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_com_luz', '3') !!} ++
                            </div>
                        </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                            <strong>Resposta ao estimulo: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_estimulo', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_estimulo', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_estimulo', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('resposta_estimulo', '3') !!} ++
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
                                <strong>Constrição pupila sem luz: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_sem_luz', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_sem_luz', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_sem_luz', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('constricao_pupila_sem_luz', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Retração do olho: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retracao_olho', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retracao_olho', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retracao_olho', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('retracao_olho', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Queda palpebra: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('queda_palpebra', '0', true) !!} 0
                            </div>
                                <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('queda_palpebra', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('queda_palpebra', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('queda_palpebra', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Córnea opaca: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cornea_opaca', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cornea_opaca', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cornea_opaca', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('cornea_opaca', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Bradicardia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bradicardia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bradicardia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bradicardia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('bradicardia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Taquicardia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('taquicardia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('taquicardia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('taquicardia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('taquicardia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Arritmia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('arritmia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('arritmia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('arritmia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('arritmia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Vasocontrição ou dialatação: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vasocontricao_ou_dialatacao', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vasocontricao_ou_dialatacao', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vasocontricao_ou_dialatacao', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vasocontricao_ou_dialatacao', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Hipotonia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipotonia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipotonia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipotonia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipotonia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Hipertonia: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipertonia', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipertonia', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipertonia', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('hipertonia', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Fezes: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fezes', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fezes', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fezes', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('fezes', '3') !!} ++
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
                                <strong>Vômito: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vomito', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vomito', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vomito', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('vomito', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Micção involuntária: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('miccao_involuntaria', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('miccao_involuntaria', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('miccao_involuntaria', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                            {!! Form::radio('miccao_involuntaria', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Urina vermelha: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('urina_vermelha', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('urina_vermelha', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('urina_vermelha', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('urina_vermelha', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Edema: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('edema', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('edema', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('edema', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('edema', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Avermelhamento pele: </strong>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('avermelhamento_pele', '0', true) !!} 0
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('avermelhamento_pele', '1') !!} -
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('avermelhamento_pele', '2') !!} +
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1">
                                {!! Form::radio('avermelhamento_pele', '3') !!} ++
                            </div>
                        </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <div class="form-group">
                            <div class="col-sm-12 col-md-2">
                                <strong>Convulsões: </strong>
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
                                <strong>Respiração: </strong>
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
