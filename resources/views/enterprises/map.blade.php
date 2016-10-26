@extends('layouts.panel')
@section('title','Alineamiento')
@section('view','Alinear objetivos estratégicos')
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
                                <a class="btn btn-success button" href="{{ url('objetivos-estrategicos-alineamiento/'.$finance->id) }}">
                                    @if( $finance->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$finance->name}}
                                    @else
                                        {{$finance->name}}
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="info text-center">
                    <td class="td"><h4>Cliente</h4></td>
                    <td>
                        @foreach( $clients as $client )
                            <div class="col col-md-3">
                                <a class="btn btn-info button" href="{{ url('objetivos-estrategicos-alineamiento/'.$client->id) }}">
                                    @if( $client->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$client->name}}
                                    @else
                                        {{$client->name}}
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="td"><h4>Procesos internos</h4></td>
                    <td>
                        @foreach( $processes as $process  )
                            <div class="col col-md-3">
                                <a class="btn btn-primary button" href="{{ url('objetivos-estrategicos-alineamiento/'.$process->id) }}">
                                    @if( $process->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$process->name}}
                                    @else
                                        {{$process->name}}
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </td>
                </tr>
                <tr class="warning text-center">
                    <td class="td"><h4>Aprendizaje y desarrollo</h4></td>
                    <td>
                        @foreach( $developments as $development )
                            <div class="col col-md-3">
                                <a class="btn btn-warning button" href="{{ url('objetivos-estrategicos-alineamiento/'.$development->id) }}">
                                    @if( $development->aligned ==1 )
                                        <span class="glyphicon glyphicon-star-empty color" aria-hidden="true"> </span> {{$development->name}}
                                    @else
                                        {{$development->name}}
                                    @endif
                                </a>
                            </div>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
