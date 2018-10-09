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
        <div class="pull-left">
            <h2>Cadastrar Nova Avaliacao de Toxidade Aguda</h2>
        </div>
        @endsection     
        <div class="pull-right">
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
<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Agressividade: </strong>
                    {!! Form::radio('agressividade', '0', true) !!} 0
                    {!! Form::radio('agressividade', '1') !!} -
                    {!! Form::radio('agressividade', '2') !!} +
                    {!! Form::radio('agressividade', '3') !!} ++
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ambulação aumentada: </strong>
                    {!! Form::radio('ambulacao_aumentada', '0', true) !!} 0
                    {!! Form::radio('ambulacao_aumentada', '1') !!} -
                    {!! Form::radio('ambulacao_aumentada', '2') !!} +
                    {!! Form::radio('ambulacao_aumentada', '3') !!} ++
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Andar em círculos: </strong>
                    {!! Form::radio('andar_em_circulo', '0', true) !!} 0
                    {!! Form::radio('andar_em_circulo', '1') !!} -
                    {!! Form::radio('andar_em_circulo', '2') !!} +
                    {!! Form::radio('andar_em_circulo', '3') !!} ++
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Auto limpeza: </strong>
                    {!! Form::radio('auto_limpeza', '0', true) !!} 0
                    {!! Form::radio('auto_limpeza', '1') !!} -
                    {!! Form::radio('auto_limpeza', '2') !!} +
                    {!! Form::radio('auto_limpeza', '3') !!} ++
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