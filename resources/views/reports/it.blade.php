@extends('layouts.panel')
@section('title','Metas ti')
@section('view','Reporte de metas ti')
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
                @if( $finance ==1 )
                    <tr class="success text-center">
                        <td class="td"><h4>Financiera</h4></td>
                        <td>
                            @foreach( $its as $it )
                                @if( $it->perspective_id == 1 )
                                    <div class="col col-md-3 padding">
                                        <a href="#" class="btn btn-success button">
                                            {{$it->name}}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif

                @if( $client == 1 )
                    <tr class="info text-center">
                        <td class="td"><h4>Cliente</h4></td>
                        <td>
                            @foreach( $its as $it )
                                @if( $it->perspective_id == 2 )
                                <div class="col col-md-3 padding">
                                    <a href="#" class="btn btn-info button">
                                        {{$it->name}}
                                    </a>
                                </div>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif

                @if( $process == 1 )
                    <tr class="text-center">
                        <td class="td"><h4>Procesos internos</h4></td>
                        <td>
                            @foreach( $its as $it )
                                @if( $it->perspective_id == 3 )
                                    <div class="col col-md-3 padding">
                                        <a href="#" class="btn btn-primary button">
                                            {{$it->name}}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endif

                @if( $development == 1 )
                    <tr class="warning text-center">
                        <td class="td"><h4>Aprendizaje y desarrollo</h4></td>
                        <td>
                            @foreach( $its as $it )
                                @if( $it->perspective_id == 4 )
                                    <div class="col col-md-3 padding">
                                        <a href="#" class="btn btn-warning button">
                                            {{$it->name}}
                                        </a>
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
