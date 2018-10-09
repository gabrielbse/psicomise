@extends('layouts.app')
<script src = "{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src = "{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type = "text/javascript"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">

<link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
<script src="{{ asset('js/iziToast.min.js') }}"></script>


@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        @section('contentheader_title')
        <div class="pull-left">
            <h2>Avaliação de Toxidade Aguda</h2>
        </div>
        @endsection 
        <div class="pull-right">
            @permission('gestao_avaliacao_toxidade_aguda-create')
            <a class="btn btn-primary" href="{{ route('avaliacaoToxidadeAguda.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar ATA</a>
            @endpermission
        </div>
    </div>
</div>
<br>

<br>
<div class="box">
    <div class="box-body">
        <table id="table" class="table table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Animal</th>
                    <th>Minuto</th>
                    <th>Data</th>
                    <th>Experimento</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($avaliacaotoxidadeagudas as $key => $avaliacaoToxidadeAguda)
                <tr>
                    <td>{{ $avaliacaoToxidadeAguda->id }}</td>
                    <td>{{ $avaliacaoToxidadeAguda->animal->identificacao_do_animal}}</td>
                    @if($avaliacaoToxidadeAguda-> tempo_minuto_avaliacao == 0)
                    <td>{{30}}</td>
                    @endif
                    @if($avaliacaoToxidadeAguda-> tempo_minuto_avaliacao == 1)
                    <td>{{60}}</td>
                    @endif
                    @if($avaliacaoToxidadeAguda-> tempo_minuto_avaliacao == 2)
                    <td>{{120}}</td>
                    @endif
                    @if($avaliacaoToxidadeAguda-> tempo_minuto_avaliacao == 3)
                    <td>{{180}}</td>
                    @endif
                    @if($avaliacaoToxidadeAguda-> tempo_minuto_avaliacao == 4)
                    <td>{{240}}</td>
                    @endif
                    <td>{{ $avaliacaoToxidadeAguda-> data_avaliacao}}</td>
                    <td>{{ $avaliacaoToxidadeAguda->experimento->nome_experimento}}</td>
                    <td>
                        @permission('gestao_avaliacao_toxidade_aguda-create')
                        <a class="btn btn-info" data-toggle="modal" data-target="#{{$avaliacaoToxidadeAguda->id}}"title="Visualizar"> <i class="fa fa-eye"></i></a>
                        @endpermission
                        @permission('gestao_avaliacao_toxidade_aguda-edit')
                        <a class="btn btn-primary" href="{{ route('avaliacaoToxidadeAguda.edit',$avaliacaoToxidadeAguda->id) }}"title="Editar"><i class="fa fa-edit"></i></a>
                        @endpermission
                        @permission('gestao_avaliacao_toxidade_aguda-delete')
                        <a class="btn btn-danger" data-toggle="modal" data-target="#e{{$avaliacaoToxidadeAguda->id}}"title="Excluir"><i class= "fa fa-trash-o"></i></a>
                        @endpermission

                        
                        <div class="modal fade" style="" id="{{$avaliacaoToxidadeAguda->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><strong>{{$avaliacaoToxidadeAguda->data_avaliacao}}</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <strong>Minuto da Avaliação:</strong>
                                                {{ $avaliacaoToxidadeAguda->tempo_minuto_avaliacao}}
                                                <br><br>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <strong>Peso do Animal no dia:</strong>
                                                {{ $avaliacaoToxidadeAguda->peso_animal_no_dia}}
                                                <br><br>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <strong>Experimento:</strong>
                                                {{ $avaliacaoToxidadeAguda->experimento->nome_experimento}}
                                                <br><br>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <strong>Animal:</strong>
                                                {{ $avaliacaoToxidadeAguda->animal->identificacao_do_animal}}
                                                <br><br>
                                            </div>
            
                                        </div>
                                                <br><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


<div class="modal fade" id="e{{$avaliacaoToxidadeAguda->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Excluir</h4>
            </div>
            <div class="modal-body">
                Tem certeza que deseja excluir?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                {!! Form::open(['method' => 'DELETE','route' => ['avaliacaoToxidadeAguda.destroy', $avaliacaoToxidadeAguda->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
{!! $avaliacaotoxidadeagudas->render() !!}
@endsection

<script>
$(function ($) {
    $('#table').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todos"]]
    });
});
</script>
<script>
    @if (Session::get('success'))
            $(function () {
                var msg = "{{Session::get('success')}}"
                iziToast.success({
                    title: 'OK',
                    message: msg,
                });
            });
            @endif
</script>
