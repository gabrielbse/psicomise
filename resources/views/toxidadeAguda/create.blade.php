@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left" style="margin-left: 1%">
            Ficha clínica: exame anamnésico
        </div>
        @endsection     
        <div class="pull-right" style="margin-right: 3%">
            <a class="btn btn-primary" href="{{ route('avaliacaoToxidadeAgudaController.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'avaliacaoToxidadeAgudaController.store','method'=>'POST')) !!}
<br>
<div class="box box-primary" style="margin-left: 3%; margin-right: 3%; width: 94%;">
    <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <fieldset>
                    <legend>Dados da Avaliação</legend>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Bloqueio nas narinas: </strong>
                            {!! Form::radio('bloqueio_nas_narinas', '0', true) !!} 0
                            {!! Form::radio('bloqueio_nas_narinas', '1') !!} -
                            {!! Form::radio('bloqueio_nas_narinas', '2') !!} +
                            {!! Form::radio('bloqueio_nas_narinas', '3') !!} ++
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Dispineia: </strong>
                            {!! Form::radio('dispineia', '0', true) !!} 0
                            {!! Form::radio('dispineia', '1') !!} -
                            {!! Form::radio('dispineia', '2') !!} +
                            {!! Form::radio('dispineia', '3') !!} ++
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Apneia: </strong>
                            {!! Form::radio('apneia', '0', true) !!} 0
                            {!! Form::radio('apneia', '1') !!} -
                            {!! Form::radio('apneia', '2') !!} +
                            {!! Form::radio('apneia', '3') !!} ++
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Cianose: </strong>
                            {!! Form::radio('cianose', '0', true) !!} 0
                            {!! Form::radio('cianose', '1') !!} -
                            {!! Form::radio('cianose', '2') !!} +
                            {!! Form::radio('cianose', '3') !!} ++
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Atividade Motora: </strong>
                            {!! Form::radio('atividade_motora', '0', true) !!} 0
                            {!! Form::radio('atividade_motora', '1') !!} -
                            {!! Form::radio('atividade_motora', '2') !!} +
                            {!! Form::radio('atividade_motora', '3') !!} ++
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sonolencia: </strong>
                            {!! Form::radio('sonolencia', '0', true) !!} 0
                            {!! Form::radio('sonolencia', '1') !!} -
                            {!! Form::radio('sonolencia', '2') !!} +
                            {!! Form::radio('sonolencia', '3') !!} ++
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Reflexo e resposta a dor: </strong>
                            {!! Form::radio('reflexo_e_resposta_a_dor', '0', true) !!} 0
                            {!! Form::radio('reflexo_e_resposta_a_dor', '1') !!} -
                            {!! Form::radio('reflexo_e_resposta_a_dor', '2') !!} +
                            {!! Form::radio('reflexo_e_resposta_a_dor', '3') !!} ++
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Catalepsia: </strong>
                            {!! Form::radio('catalepsia', '0', true) !!} 0
                            {!! Form::radio('catalepsia', '1') !!} -
                            {!! Form::radio('catalepsia', '2') !!} +
                            {!! Form::radio('catalepsia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Ataxia: </strong>
                            {!! Form::radio('ataxia', '0', true) !!} 0
                            {!! Form::radio('ataxia', '1') !!} -
                            {!! Form::radio('ataxia', '2') !!} +
                            {!! Form::radio('ataxia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Prostacao: </strong>
                            {!! Form::radio('prostacao', '0', true) !!} 0
                            {!! Form::radio('prostacao', '1') !!} -
                            {!! Form::radio('prostacao', '2') !!} +
                            {!! Form::radio('prostacao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Tremores: </strong>
                            {!! Form::radio('tremores', '0', true) !!} 0
                            {!! Form::radio('tremores', '1') !!} -
                            {!! Form::radio('tremores', '2') !!} +
                            {!! Form::radio('tremores', '3') !!} ++
                        </div>
                         <div class="form-group">
                            <strong>Fechamento palpebra: </strong>
                            {!! Form::radio('fechamento_palpebra', '0', true) !!} 0
                            {!! Form::radio('fechamento_palpebra', '1') !!} -
                            {!! Form::radio('fechamento_palpebra', '2') !!} +
                            {!! Form::radio('fechamento_palpebra', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Retrair pata: </strong>
                            {!! Form::radio('retrair_pata', '0', true) !!} 0
                            {!! Form::radio('retrair_pata', '1') !!} -
                            {!! Form::radio('retrair_pata', '2') !!} +
                            {!! Form::radio('retrair_pata', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Constricao pupila com luz: </strong>
                            {!! Form::radio('constricao_pupila_com_luz', '0', true) !!} 0
                            {!! Form::radio('constricao_pupila_com_luz', '1') !!} -
                            {!! Form::radio('constricao_pupila_com_luz', '2') !!} +
                            {!! Form::radio('constricao_pupila_com_luz', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Resposta estimulo: </strong>
                            {!! Form::radio('resposta_estimulo', '0', true) !!} 0
                            {!! Form::radio('resposta_estimulo', '1') !!} -
                            {!! Form::radio('resposta_estimulo', '2') !!} +
                            {!! Form::radio('resposta_estimulo', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Lacrimejamento: </strong>
                            {!! Form::radio('lacrimejamento', '0', true) !!} 0
                            {!! Form::radio('lacrimejamento', '1') !!} -
                            {!! Form::radio('lacrimejamento', '2') !!} +
                            {!! Form::radio('lacrimejamento', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Constricao pupila sem luz: </strong>
                            {!! Form::radio('constricao_pupila_sem_luz', '0', true) !!} 0
                            {!! Form::radio('constricao_pupila_sem_luz', '1') !!} -
                            {!! Form::radio('constricao_pupila_sem_luz', '2') !!} +
                            {!! Form::radio('constricao_pupila_sem_luz', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Retracao olho: </strong>
                            {!! Form::radio('retracao_olho', '0', true) !!} 0
                            {!! Form::radio('retracao_olho', '1') !!} -
                            {!! Form::radio('retracao_olho', '2') !!} +
                            {!! Form::radio('retracao_olho', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Queda palpebra: </strong>
                            {!! Form::radio('queda_palpebra', '0', true) !!} 0
                            {!! Form::radio('queda_palpebra', '1') !!} -
                            {!! Form::radio('queda_palpebra', '2') !!} +
                            {!! Form::radio('queda_palpebra', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Cornea opaca: </strong>
                            {!! Form::radio('cornea_opaca', '0', true) !!} 0
                            {!! Form::radio('cornea_opaca', '1') !!} -
                            {!! Form::radio('cornea_opaca', '2') !!} +
                            {!! Form::radio('cornea_opaca', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Bradicardia: </strong>
                            {!! Form::radio('bradicardia', '0', true) !!} 0
                            {!! Form::radio('bradicardia', '1') !!} -
                            {!! Form::radio('bradicardia', '2') !!} +
                            {!! Form::radio('bradicardia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Taquicardia: </strong>
                            {!! Form::radio('taquicardia', '0', true) !!} 0
                            {!! Form::radio('taquicardia', '1') !!} -
                            {!! Form::radio('taquicardia', '2') !!} +
                            {!! Form::radio('taquicardia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Arritmia: </strong>
                            {!! Form::radio('arritmia', '0', true) !!} 0
                            {!! Form::radio('arritmia', '1') !!} -
                            {!! Form::radio('arritmia', '2') !!} +
                            {!! Form::radio('arritmia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Vasocontricao ou dialatacao: </strong>
                            {!! Form::radio('vasocontricao_ou_dialatacao', '0', true) !!} 0
                            {!! Form::radio('vasocontricao_ou_dialatacao', '1') !!} -
                            {!! Form::radio('vasocontricao_ou_dialatacao', '2') !!} +
                            {!! Form::radio('vasocontricao_ou_dialatacao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Hipotonia: </strong>
                            {!! Form::radio('hipotonia', '0', true) !!} 0
                            {!! Form::radio('hipotonia', '1') !!} -
                            {!! Form::radio('hipotonia', '2') !!} +
                            {!! Form::radio('hipotonia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Hipertonia: </strong>
                            {!! Form::radio('hipertonia', '0', true) !!} 0
                            {!! Form::radio('hipertonia', '1') !!} -
                            {!! Form::radio('hipertonia', '2') !!} +
                            {!! Form::radio('hipertonia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Fezes: </strong>
                            {!! Form::radio('fezes', '0', true) !!} 0
                            {!! Form::radio('fezes', '1') !!} -
                            {!! Form::radio('fezes', '2') !!} +
                            {!! Form::radio('fezes', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Diarreia: </strong>
                            {!! Form::radio('diarreia', '0', true) !!} 0
                            {!! Form::radio('diarreia', '1') !!} -
                            {!! Form::radio('diarreia', '2') !!} +
                            {!! Form::radio('diarreia', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Vomito: </strong>
                            {!! Form::radio('vomito', '0', true) !!} 0
                            {!! Form::radio('vomito', '1') !!} -
                            {!! Form::radio('vomito', '2') !!} +
                            {!! Form::radio('vomito', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Miccao involuntaria: </strong>
                            {!! Form::radio('miccao_involuntaria', '0', true) !!} 0
                            {!! Form::radio('miccao_involuntaria', '1') !!} -
                            {!! Form::radio('miccao_involuntaria', '2') !!} +
                            {!! Form::radio('miccao_involuntaria', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Urina vermelha: </strong>
                            {!! Form::radio('urina_vermelha', '0', true) !!} 0
                            {!! Form::radio('urina_vermelha', '1') !!} -
                            {!! Form::radio('urina_vermelha', '2') !!} +
                            {!! Form::radio('urina_vermelha', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Edema: </strong>
                            {!! Form::radio('edema', '0', true) !!} 0
                            {!! Form::radio('edema', '1') !!} -
                            {!! Form::radio('edema', '2') !!} +
                            {!! Form::radio('edema', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Avermelhamento pele: </strong>
                            {!! Form::radio('avermelhamento_pele', '0', true) !!} 0
                            {!! Form::radio('avermelhamento_pele', '1') !!} -
                            {!! Form::radio('avermelhamento_pele', '2') !!} +
                            {!! Form::radio('avermelhamento_pele', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Convulsoes: </strong>
                            {!! Form::radio('convulsoes', '0', true) !!} 0
                            {!! Form::radio('convulsoes', '1') !!} -
                            {!! Form::radio('convulsoes', '2') !!} +
                            {!! Form::radio('convulsoes', '3') !!} ++
                        </div>
                         <div class="form-group">
                            <strong>Salivacao: </strong>
                            {!! Form::radio('salivacao', '0', true) !!} 0
                            {!! Form::radio('salivacao', '1') !!} -
                            {!! Form::radio('salivacao', '2') !!} +
                            {!! Form::radio('salivacao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Forca para agarrar: </strong>
                            {!! Form::radio('forca_para_agarrar', '0', true) !!} 0
                            {!! Form::radio('forca_para_agarrar', '1') !!} -
                            {!! Form::radio('forca_para_agarrar', '2') !!} +
                            {!! Form::radio('forca_para_agarrar', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Miccao: </strong>
                            {!! Form::radio('miccao', '0', true) !!} 0
                            {!! Form::radio('miccao', '1') !!} -
                            {!! Form::radio('miccao', '2') !!} +
                            {!! Form::radio('miccao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Piloerecao: </strong>
                            {!! Form::radio('piloerecao', '0', true) !!} 0
                            {!! Form::radio('piloerecao', '1') !!} -
                            {!! Form::radio('piloerecao', '2') !!} +
                            {!! Form::radio('piloerecao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Respiracao: </strong>
                            {!! Form::radio('respiracao', '0', true) !!} 0
                            {!! Form::radio('respiracao', '1') !!} -
                            {!! Form::radio('respiracao', '2') !!} +
                            {!! Form::radio('respiracao', '3') !!} ++
                        </div>
                        <div class="form-group">
                            <strong>Analgesia: </strong>
                            {!! Form::radio('analgesia', '0', true) !!} 0
                            {!! Form::radio('analgesia', '1') !!} -
                            {!! Form::radio('analgesia', '2') !!} +
                            {!! Form::radio('analgesia', '3') !!} ++
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <strong>Observacões:</strong>
                            {!! Form::textarea('observacao', null, array('class' => 'form-control', 'size'=>'10x5')) !!}                
                         </div>
                      </div>
                       <div class="col-xs-4 col-sm-4 col-md-4">
		                  <div class="form-group">
		                    <strong>Avaliação Toxidade Aguda</strong>
		                    {!! Form::select('fk_avaliacao_toxidade_aguda', $avaliacao_toxidade_aguda, null, array('class' => 'form-control')) !!}
		                  </div>
                      </div>
                </fieldset>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection