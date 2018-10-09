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
            <h2>Cadastrar Novo Animal</h2>
        </div>
        @endsection     
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('animal.index') }}"> Voltar</a>
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
{!! Form::open(array('route' => 'animal.store','method'=>'POST')) !!}

<br>
<div class="box box-primary">
    <div class="box-body">
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>ID de registro:</strong>
                    {!! Form::text('identificacao_do_animal', null, array('placeholder' => 'Digite o ID do animal','class' => 'form-control')) !!}
                </div>
            </div>
             <div class="col-xs-4 col-sm-4 col-md-4">
               <div class="form-group">
                 <strong>Grupo Experimento</strong>
                 {!! Form::select('fk_grupo_experimento', $grupo_experimentos, null, array('class' => 'form-control')) !!}

              </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Idade (dias):</strong>
                    {!! Form::number('idade_animal', null, array('placeholder' => 'Digite a idade do animal','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Sexo:</strong>
                    {!! Form::select('sexo_animal',array('M' => 'Macho', 'F' => 'Fêmea'), null, array('placeholder' => 'Selecione o sexo','class' => 'form-control')) !!}
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

