@extends('layouts.panel')
@section('title','Procesos de cobit')
@section('view','Reporte de procesos de cobit')
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
    <div class="row">
        <table class="table table-bordered">
            <tbody>
            @if( $category_1 ==1 )
                <tr class="text-center">
                    <td class="td"><h4>Evaluar, Orientar y Supervisar</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 1 )
                                <div class="col col-md-3 padding">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            {{$process->code.' - '.$process->name}}
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-primary">Evidencia</button>
                                            <button class="btn btn-danger">Ver</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif

            @if( $category_2 == 1 )
                <tr class="text-center">
                    <td class="td"><h4>Alinear, Planificar y Organizar</h4></td>
                    <td>
                        @foreach( $processes as $process )
                            @if( $process->category_id == 2 )
                                <div class="col col-md-3 padding">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            {{$process->code.' - '.$process->name}}
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-primary">Evidencia</button>
                                            <button class="btn btn-warning">Ver</button>
                                        </div>
                                    </div>
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
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            {{$process->code.' - '.$process->name}}
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-primary">Evidencia</button>
                                            <button class="btn btn-danger">Ver</button>
                                        </div>
                                    </div>
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
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            {{$process->code.' - '.$process->name}}
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-primary">Evidencia</button>
                                            <button class="btn btn-warning">Ver</button>
                                        </div>
                                    </div>
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
                                <div class="col col-md-4 padding">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            {{$process->code.' - '.$process->name}}
                                        </div>
                                        <div class="panel-footer text-center">
                                            <button class="btn btn-info">Evidencia</button>
                                            <button class="btn btn-danger">Ver</button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@endsection
