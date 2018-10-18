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
            <h2>Cadastrar Nova Planta</h2>
        </div>
        @endsection     
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('planta.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'planta.store','method'=>'POST')) !!}

<br>
<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Nome:</strong>
                    {!! Form::text('nome_planta', null, array('placeholder' => 'Digite o nome da planta da planta','class' => 'form-control')) !!}
                </div>
            </div>
             <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Local da retirada:</strong>
                    {!! Form::text('local_retirada', null, array('placeholder' => 'Digite o nome do local onde a planta foi retirada','class' => 'form-control')) !!}
                </div>
            </div>
               <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Link com Site:</strong>
                    {!! Form::text('link_com_site', null, array('placeholder' => 'Digite o link do site refente a planta','class' => 'form-control')) !!}
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                   <div class="form-group">
                     <strong>Especie</strong>
                     {!! Form::select('fk_especie_planta', $especie_planta, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
                 <div class="col-sm-12 col-md-4">
                   <div class="form-group">
                     <strong>Gênero</strong>
                     {!! Form::select('fk_genero_planta', $genero_planta, null, array('class' => 'form-control')) !!}
                  </div>
                </div>
                   <div class="col-sm-12 col-md-4">
                     <div class="form-group">
                     <strong>Familia</strong>
                     {!! Form::select('fk_familia_planta', $familia_planta, null, array('class' => 'form-control')) !!}
                  </div>
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