
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
            <h2>Editar Via de Administração</h2>
        </div>
        @endsection  
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('via_administracao.index') }}"> Voltar</a>
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
{!! Form::model($via_administracao, ['method' => 'PATCH','route' => ['via_administracao.update', $via_administracao->id]]) !!}
<br>
<div class="box box-primary">
    <div class="row">
        <div class="box-body">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Nome do Via de Administração:</strong>
                    {!! Form::text('nome_via_administracao', null, array('placeholder' => 'Digite o nome da via_administracao da medicamento','class' => 'form-control','style'=>'height:30px')) !!}
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
