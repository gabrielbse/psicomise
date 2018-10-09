@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Mostrar Experimento</h2>
        </div>
        @endsection    
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('experimento.index') }}"> Voltar</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
            <strong>Nome do Experimento:</strong>
            {{ $experimento->nome_experimento }}
        </div>
        <div class="form-group">
            <strong>Dose do Experimento:</strong>
            {{ $experimento->dose }}
        </div>
          <div class="form-group">
            <strong>Peso referencia:</strong>
            {{ $experimento->peso_referencia }}
        </div>
    </div>
</div>
    @endsection