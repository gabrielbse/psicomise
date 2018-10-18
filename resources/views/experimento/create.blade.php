@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href = "{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Cadastrar Novo Experimento</h2>
        </div>
        @endsection     
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('experimento.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'experimento.store','method'=>'POST')) !!}

<br>
<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Nome do Experimento:</strong>
                    {!! Form::text('nome_experimento', null, array('placeholder' => 'Digite o nome do experimento','class' => 'form-control')) !!}
                </div>
            </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Dose do extrato da planta:</strong>
                    {!! Form::number('dose', null, array('placeholder' => 'Digite a dose do extrato da planta aplicada ao animal','class' => 'form-control')) !!}
                </div>
            </div>
               <div class="col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>Nome do Farmaco (*Se utiliar farmaco):</strong>
                    {!! Form::text('nome_farmaco', null, array('placeholder' => 'Digite o nome do farmaco','class' => 'form-control')) !!}
                </div>
            </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Dose do Farmaco(*Se utiliar farmaco):</strong>
                    {!! Form::number('dose_farmaco', null, array('placeholder' => 'Digite a dose do farmaco','class' => 'form-control')) !!}
                </div>
            </div>
              <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Peso referência:</strong>
                    {!! Form::number('peso_referencia', null, array('placeholder' => 'Digite o peso referência do animal','class' => 'form-control')) !!}
                </div>
            </div>
             <div class="col-sm-12 col-md-4">
                   <div class="form-group">
                     <strong>Planta</strong>
                     {!! Form::select('fk_planta', $planta, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
                <div class="col-sm-12 col-md-4">
                   <div class="form-group">
                     <strong>Parte da Planta</strong>
                     {!! Form::select('fk_parte_da_planta', $parte_da_planta, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
                 <div class="col-sm-12 col-md-4">
                   <div class="form-group">
                     <strong>Via de Administracao</strong>
                     {!! Form::select('fk_via_de_administracao', $via_de_administracao, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
                   <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                     <strong>Tipo de Extrato</strong>
                     {!! Form::select('fk_tipo_extrato', $tipo_extrato, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
{!! Form::close() !!}
@endsection