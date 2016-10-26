@extends('layouts.panel')
@section('title','Perspectivas')

@section('content')
    <div class="row">
        <div class="text-center">
            <h1>Perspectivas</h1>
        </div>
        <br>
        <div class="col-md-12 col-lg-6 col-sm-12  col-lg-offset-3 table-responsive">
            <button class="btn btn-success" id="new"><i class="fa fa-plus-square-o"></i> Nueva perspectiva</button>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Perspectiva</th>
                        <th>Funcionalidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perspectives as $perspective )
                        <tr>
                            <td>
                                {{$perspective->name}}
                            </td>
                            <td>
                                <button class="btn btn-primary" data-edit="{{$perspective->id}}" data-name="{{ $perspective->name }}">
                                    <i class="fa fa-edit"></i> Editar
                                </button>
                                <button type="submit" class="btn btn-danger"  data-delete="{{ $perspective->id }}" data-name="{{ $perspective->name }}">
                                    <i class="fa fa-trash"></i> Eliminar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('modals')
    <div id="modalRegistrar" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar perspectiva</h4>
                </div>

                <form id="formRegistrar" action="{{ url('perspectivas/registrar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre <span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="name" name="name" required="required" class="form-control inside">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Registrar perspectiva</button>
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
                    <h4 class="modal-title">Editar perspectiva</h4>
                </div>

                <form id="formEditar" action="{{ url('perspectivas/editar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Nombre <span class="required">*</span></label>
                            <div class="col-md-8">
                                <input type="text" id="name" name="name" required="required" class="form-control inside">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="text-center">
                                <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Guardar perspectiva</button>
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
                    <h4 class="modal-title">Eliminar perspectiva</h4>
                </div>
                <form id="formEliminar" action="{{ url('perspectivas/eliminar') }}" method="POST">
                    <div class="modal-body">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="nombreEliminar">¿Desea eliminar la siguiente perspectiva?</label>
                            <input type="text" readonly class="form-control" name="name"/>
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
    <script src="{{ asset('assets/js/perspectives/index.js') }}"></script>
@endsection