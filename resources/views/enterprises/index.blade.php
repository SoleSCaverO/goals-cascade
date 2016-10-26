@extends('layouts.panel')
@section('title','Empresa')
@section('view','Objetivos estratégicos')
@section('styles')
    <style xmlns="http://www.w3.org/1999/html">
        .area
        {
            resize: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <br>
        <div class="col-md-12 col-lg-10 col-sm-12  col-lg-offset-1 table-responsive">
            <button class="btn btn-success" id="new"><i class="fa fa-plus-square-o"></i> Nuevo objetivo</button>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Objetivo</th>
                        <th>Perspectiva</th>
                        <th>Funcionalidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enterprises as $enterprise )
                        <tr>
                            <td>{{$enterprise->name}}</td>
                            <td>{{$enterprise->perspective->name}}</td>
                            <td>
                                <button class="btn btn-primary" data-edit="{{ $enterprise->id }}" data-name="{{ $enterprise->name }}"
                                        data-perspective="{{ $enterprise->perspective_id }}">
                                    <span title="Editar" class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </button>

                                <button type="submit" class="btn btn-danger"  data-delete="{{ $enterprise->id }}" data-name="{{ $enterprise->name }}">
                                    <span title="eliminar" class="glyphicon glyphicon-trash" aria-hidden="true">
                                    </span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $enterprises->render() }}
        </div>
    </div>
@endsection

@section('modals')
    <div id="modalRegistrar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar objetivos estratégicos</h4>
                </div>

                <form id="formRegistrar" action="{{ url('objetivos-estrategicos/registrar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre <span class="required">*</span></label>
                            <div class="col-md-8">
                                <textarea id="name" name="name" required="required" class="form-control inside area"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Perspectiva <span class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="perspectives" id="perspectives" class="form-control">
                                    @foreach( $perspectives as $perspective )
                                        <option value="{{$perspective->id}}">{{$perspective->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Registrar objetivo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalEditar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Editar objetivos estratégicos</h4>
                </div>

                <form id="formEditar" action="{{ url('objetivos-estrategicos/editar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre <span class="required">*</span></label>
                            <div class="col-md-8">
                                <textarea id="name" name="name" required="required" class="form-control inside area"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Perspectiva <span class="required">*</span></label>
                            <div class="col-md-8">
                                <select name="perspectives" id="perspectives" class="form-control">
                                    @foreach( $perspectives as $perspective )
                                        <option value="{{$perspective->id}}">{{$perspective->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Guardar objetivo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modalEliminar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar objetivo estratégico</h4>
                </div>
                <form id="formEliminar" action="{{ url('objetivos-estrategicos/eliminar') }}" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="nombreEliminar">¿Desea eliminar el siguiente objetivo estratégico?</label>
                            <textarea  readonly class="form-control area" name="name"/></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Aceptar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/enterprises/index.js') }}"></script>
@endsection