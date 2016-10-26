@extends('layouts.panel')
@section('title','Procesos de cobit')
@section('view','Procesos de cobit')
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
        .padding
        {
            padding-top: 4px;
        }
    </style>
@endsection

@section('content')
    <div class="row form-group">
        <label>{{ $name }}</label>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tbody>
            @if( $category_1 ==1 )
                <tr class="success text-center">
                    <td class="td"><h4>Evaluar, Orientar y Supervisar</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 1 )
                                <div class="col col-md-3 padding">
                                    <button href="#" class="btn btn-success button">
                                        {{$process->code.' - '.$process->name}}
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif

            @if( $category_2 == 1 )
                <tr class="info text-center">
                    <td class="td"><h4>Alinear, Planificar y Organizar</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 2 )
                                <div class="col col-md-3 padding">
                                    <button href="#" class="btn btn-info button">
                                       {{$process->code.' - '.$process->name}}
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif

            @if( $category_3 == 1 )
                <tr class="text-center">
                    <td class="td"><h4>Construcción, Adquisición e implementación</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 3 )
                                <div class="col col-md-3 padding">
                                    <button href="#" class="btn btn-primary button">
                                        {{$process->code.' - '.$process->name}}
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif

            @if( $category_4 == 1 )
                <tr class="warning text-center">
                    <td class="td"><h4>Entregar, dar Servicio y Soporte</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 4 )
                                <div class="col col-md-3 padding">
                                    <a href="#" class="btn btn-warning button">
                                        {{$process->code.' - '.$process->name}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif

            @if( $category_5 == 1 )
                <tr class="danger text-center">
                    <td class="td"><h4>Supervisión, Evaluación y Verificación</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 5 )
                                <div class="col col-md-3 padding">
                                    <button href="#" class="btn btn-danger button">
                                        {{$process->code.' - '.$process->name}}
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
    <div class="row text-center">
        <a href="{{url('cascada-metas/'.$enterprise.'/'.$corporative)}}" class="btn btn-danger btn-lg">Volver</a>
    </div>
@endsection
@section('modals')
    <div id="modalEditar" class="modal fade in">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Evidencias</h4>
                </div>

                <form action="{{ url('producto/modificar') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="id" />

                        <div class="form-group">
                            <label class="control-label col-md-3"  for="image">Subir evidencia</label>
                            <div class="col-md-5">
                                <input type="file" name="image" class="form-control inside" accept="image/*">
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Guardar producto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
