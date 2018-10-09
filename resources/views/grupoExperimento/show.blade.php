@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Grupos do Experimento</h2>
        </div>
        @endsection    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('grupoExperimento.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Nome do Grupo do Experimento:</strong>
            {{ $generos->nome_grupo_experimento }}
        </div>
    </div>
    @endsection