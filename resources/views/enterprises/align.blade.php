@extends('layouts.panel')
@section('title','Alineamiento')
@section('view','Alinear objetivo estratégico')
@section('styles')
    <style>
        .area
        {
            resize: none;
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="row">
        <form id="formAlinear" action="{{ url('objetivos-estrategicos-alinear') }}" class="form-horizontal form-label-left"  method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="_token"  value="{{ csrf_token() }}" />
            <input type="hidden" id="id" value="{{$enterprise->id}}">
            <div class="form-group">
                <label class="control-label col-md-3" for="name">Objetivo estratégico:</label>
                <div class="col-md-8">
                    <textarea id="name" name="name" required="required" class="form-control inside area" readonly>{{$enterprise->name}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="name">Perspectiva:</label>
                <div class="col-md-8">
                    <span>{{$enterprise->perspective->name}}</span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="name">Metas corporativas <span class="required">*</span></label>
                <div id="corporatives" class="col-md-8">
                    <select name="corporatives" id="corporatives" class="form-control">
                    @foreach( $corporatives as $corporative )
                            <option value="{{ $corporative->id  }}">{{$corporative->name}}
                                @if( $corporative->benefit == 1 )
                                    &emsp;[Beneficios]
                                @endif
                                @if( $corporative->risk == 1 )
                                    &emsp;[Riesgos]
                                @endif
                                @if( $corporative->resource == 1 )
                                    &emsp;[Recursos]
                                @endif
                            </option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3" for="name">Objetivo estratégico alineado <span class="required">*</span></label>
                <div class="col-md-8">
                    <textarea id="aligned" name="aligned" class="form-control inside area"></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-success" aria-label="Left Align" id="add">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Agregar meta corporativa de negocio
                </button>
            </div>

            <div class="col-md-10 col-md-offset-1">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Meta corporativa de negocio</th>
                            <th>Meta corporativa</th>
                            <th>Funcionalidad</th>
                        </tr>
                    </thead>
                    <tbody id="goals">
                        @foreach( $corporative_enterprises as $corporative_enterprise )
                            <tr>
                                <td data-id style="visibility:hidden;">{{ $corporative_enterprise->corporative_id  }}</td>
                                <td data-aligned>{{ $corporative_enterprise->aligned_goal }}</td>
                                <td>{{ $corporative_enterprise->corporative->name }}</td>
                                <td><button data-delete class="btn btn-danger"  > Quitar </button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="text-center">
                <a href="{{url('objetivos-estrategicos-alinear')}}" class="btn btn-danger" aria-label="Left Align">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar
                </a>
                <button type="submit" class="btn btn-primary" aria-label="Left Align">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar metas corporativas de negocio
                </button>
            </div>

        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/enterprises/align.js') }}"></script>
@endsection
