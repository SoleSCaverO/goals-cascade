@extends('layouts.panel')
@section('title','Metas corporativas de negocio')
@section('view','Metas corporativas de negocio')
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
    </style>
@endsection

@section('content')
    <div class="row">
        <table class="table table-bordered">
            <tbody>
                <tr class="success text-center">
                    <td class="td"><h4>Financiera</h4></td>
                    <td>
                        @foreach( $corp_enterprises as $corp_enterprise )
                            @if( $corp_enterprise->corporative->perspective_id == 1 )
                                <div class="col col-md-3">
                                    <a href="{{url('cascada-metas/'.$corp_enterprise->enterprise->id.'/'.$corp_enterprise->corporative->id)}}" class="btn btn-success button">
                                        {{$corp_enterprise->aligned_goal}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="info text-center">
                    <td class="td"><h4>Cliente</h4></td>
                    <td>
                        @foreach( $corp_enterprises as $corp_enterprise )
                            @if( $corp_enterprise->corporative->perspective_id == 2 )
                                <div class="col col-md-3">
                                    <a href="{{url('cascada-metas/'.$corp_enterprise->enterprise->id.'/'.$corp_enterprise->corporative->id)}}" class="btn btn-info button">
                                        {{$corp_enterprise->aligned_goal}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="text-center">
                    <td class="td"><h4>Procesos internos</h4></td>
                    <td>
                        @foreach( $corp_enterprises as $corp_enterprise )
                            @if( $corp_enterprise->corporative->perspective_id == 3 )
                                <div class="col col-md-3">
                                    <a href="{{url('cascada-metas/'.$corp_enterprise->enterprise->id.'/'.$corp_enterprise->corporative->id)}}" class="btn btn-primary button">
                                        {{$corp_enterprise->aligned_goal}}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
                <tr class="warning text-center">
                    <td class="td"><h4>Aprendizaje y desarrollo</h4></td>
                    <td>
                        @foreach( $corp_enterprises as $corp_enterprise )
                            @if( $corp_enterprise->corporative->perspective_id == 4 )
                            <div class="col col-md-3">
                                <a href="{{url('cascada-metas/'.$corp_enterprise->enterprise->id.'/'.$corp_enterprise->corporative->id)}}" class="btn btn-warning button">
                                    {{$corp_enterprise->aligned_goal}}
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
