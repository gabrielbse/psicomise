
@extends('layouts.app')

<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Editar Especie da Planta</h2>
        </div>
        @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('especie.index') }}"> Voltar</a>
        </div>
    </div>
</div>
@if ($message = Session::get('erro'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('sucess'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{!! Form::model($especie, ['method' => 'PATCH','route' => ['especie.update', $especie->id]]) !!}
<br>
<div class="box box-primary">
    <div class="row">
        <div class="box-body">
            <div class="col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>Nome da Especie:</strong>
                    {!! Form::text('nome_especie_planta', null, array('placeholder' => 'Digite o nome da especie da planta','class' => 'form-control','style'=>'height:30px')) !!}
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
