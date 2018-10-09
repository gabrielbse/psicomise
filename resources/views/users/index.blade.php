@extends('layouts.app')
<script src = "{{ asset('js/jquery-3.1.0.js') }}"></script>
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
        <h1>Usuários</h1>
        @endsection
        <div class="pull-left">
            @permission('relatorioUsuario')
            <a class="btn btn-default" href="{{ route('relatorio.usuario') }}">Gerar relatório</a>
            @endpermission
        </div>
        <div class="pull-right">
            @permission('gestao_usuario-create')
            <a class="btn btn-primary" href="{{ route('users.create') }}"><span class="glyphicon glyphicon-plus"></span> Cadastrar usuário</a>
            @endpermission
        </div>
    </div>
</div>

<br>
<div class="box box-success">
    <div class="box-body">
        <table id="table" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Papel</th>
                    <th width="280px">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->roles))
                        @foreach($user->roles as $v)
                        <label class="label label-success">{{ $v->display_name }}</label>
                        @endforeach
                        @endif
                    </td>
                    <td>
                        @permission('gestao_usuario-create')
                        <a class="btn btn-info" data-toggle="modal" data-target="#{{$user->id}}"title="Visualizar"><i class="fa fa-eye"></i></a>
                        @endpermission
                        @permission('gestao_usuario-edit')
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}" title="Editar"><i class="fa fa-edit"></i></a>
                        @endpermission
                        @permission('gestao_usuario-delete')
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" title="Excluir"><i class= "fa fa-trash-o"></i></a>
                        @endpermission

                        <div class="modal fade" id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"><strong>{{$user->name}}</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <div class="form-group">
                                                    <strong>Email:</strong>
                                                    {{ $user->email }}
                                                </div>
                                                <div class="form-group">
                                                    <strong>Papel no sistema:</strong>
                                                    @if(!empty($user->roles))
                                                    @foreach($user->roles as $v)
                                                    {{ $v->display_name }}
                                                    @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
{!! $data->render() !!}
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
@if(!empty($user))
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                {!! Form::submit('OK', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif
