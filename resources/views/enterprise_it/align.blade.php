@extends('layouts.panel')
@section('title','Alineamiento')
@section('view','Alinear objetivos estratégicos de TI')
@section('styles')
    <style>
        .td
        {
            width: 50px;
        }
        .button
        {
            white-space: normal;
        }
        .area
        {
            resize: none;
        }
        .color
        {
            color:orangered;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <table class="table table-bordered">
            <tbody>
                <tr class="success text-center">
                    <td class="td"><h4>Financiera</h4></td>
                    <td>
                        @foreach( $finances as $finance  )
                            <div class="col col-md-3">
                                <button class="btn btn-success button" data-id="{{$finance->id}}" data-name="{{$finance->name}} "
                                        data-it="{{$finance->it_id}}" data-align="{{$finance->aligned}}">
                                    @if( $finance->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$finance->name}}
                                    @else
                                        {{$finance->name}}
                                    @endif
                                </button>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="info text-center">
                    <td class="td"><h4>Cliente</h4></td>
                    <td>
                        @foreach( $clients as $client )
                            <div class="col col-md-3">
                                <button class="btn btn-info button" data-id="{{$client->id}}" data-name="{{$client->name}}"
                                        data-it="{{$client->it_id}}" data-align="{{$client->aligned}}">
                                    @if( $client->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$client->name}}
                                    @else
                                        {{$client->name}}
                                    @endif
                                </button>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="td"><h4>Procesos internos</h4></td>
                    <td>
                        @foreach( $processes as $process  )
                            <div class="col col-md-3">
                                <button class="btn btn-primary button" data-id="{{$process->id}}" data-name="{{$process->name}}"
                                        data-it="{{$process->it_id}}" data-align="{{$process->aligned}}">
                                    @if( $process->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$process->name}}
                                    @else
                                        {{$process->name}}
                                    @endif
                                </button>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="warning text-center">
                    <td class="td"><h4>Aprendizaje y desarrollo</h4></td>
                    <td>
                        @foreach( $developments as $development )
                            <div class="col col-md-3">
                                <button class="btn btn-warning button" data-id="{{$development->id}}" data-name="{{$development->name}}"
                                        data-it="{{$development->it_id}}" data-align="{{$development->aligned}}">
                                    @if( $development->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$development->name}}
                                    @else
                                        {{$development->name}}
                                    @endif
                                </button>
                            </div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('modals')
    <div id="modalAlinear" class="modal fade in">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Alinear objetivos estratégicos de TI</h4>
                </div>

                <form id="formAlinear" action="{{ url('objetivos-estrategicos-ti-alinear') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Objetivo estratégico de TI<span class="required">*</span></label>
                            <div class="col-md-8">
                                <textarea id="name" name="name" required="required" class="form-control inside area" readonly></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Metas TI de COBIT <span class="required">*</span></label>
                            <div id="its" class="col-md-8">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3" for="name">Objetivo estratégico de TI alineado <span class="required">*</span></label>
                            <div class="col-md-8">
                                <textarea id="aligned" name="aligned" required="required" class="form-control inside area"></textarea>
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
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/enterprise_its/align.js') }}"></script>
@endsection
