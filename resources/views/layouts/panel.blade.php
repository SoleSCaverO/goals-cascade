<!doctype html>
<html>

<head>
    <title>Cascada de metas | @yield('title')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />

    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/metismenu/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/lib/animate.css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-switcher.css')}}">
    <link rel="stylesheet/less" type="text/css" href="{{asset('assets/less/theme.less')}}">
    <script src="{{asset('assets/less/less.js')}}"></script>
    <style>
        .unique
        {
            width: 20px;
            height: 20px;
        }
    </style>
    @yield('styles')
</head>

<body>
<div class="bg-dark dk" id="wrap">
    <div id="top">
        <nav class="navbar navbar-inverse navbar-static-top">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <!-- .nav -->
                <ul class="nav navbar-nav">
                    <li><a href="">Gerencia de Sistemas</a></li>
                    @if(Auth::user()->role_id == 2 )
                    <li class='dropdown '>
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">
                            Gestionar cascada de metas <i class="fa fa-caret-square-o-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/perspectivas')}}">Perspectivas</a></li>
                            <li><a href="">Metas corporativas</a></li>
                            <li><a href="">Metas TI COBIT 5</a></li>
                            <li><a href="">Procesos COBIT 5</a></li>
                        </ul>
                    </li>
                        @endif
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <img class="unique" src="{{ asset('assets/img/user.png') }}" alt=""> {{ Auth::user()->name }}
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="head">
            <div class="search-bar">
                <form class="main-search">
                    <div class="input-group">
                        <input type="text" class="form-control" value="Visitante">
                    </div>
                </form>
            </div>

            <div class="main-bar">
                <h3>@yield('view')</h3>
            </div>
        </header>
    </div>

    <div id="left">
        <div class="media user-media bg-dark dker">
            <div class="user-media-toggleHover">
                <span class="fa fa-user"></span>
            </div>
            <div class="user-wrapper bg-dark">
                <a class="user-link" href="">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="{{asset('assets/img/user.png')}}">
                </a>

                <div class="media-body">
                    <h5>{{ Auth::user()->name }}</h5>
                    <ul class="list-unstyled user-info">
                        <li><a href="">{{ (Auth::user()->role_id==1)?"Usuario":"Administador" }}</a></li>
                        <li>En línea <br>
                            <small><i class="fa fa-calendar"></i> {{  Carbon\Carbon::now('America/Lima')  }}</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul id="menu" class="bg-blue dker">
            <li class="nav-divider"></li>
            <li class="nav-divider"></li>
            <li class="nav-header">Menú</li>
            <li class="nav-divider"></li>
            <li class="nav-divider"></li>
            <li>
                <a href="{{url('objetivos-estrategicos')}}">
                    <i class="fa fa-bullseye"></i><span class="link-title"> Objetivos estratégicos</span>
                </a>
            </li>

            <!--
            <li>
                <a href="{{url('objetivos-estrategicos-ti')}}">
                    <i class="fa fa fa-bar-chart-o"></i><span class="link-title"> Objetivos estratégicos TI</span>
                </a>
            </li>
            -->

            <li class="nav-divider"></li>
            <li>
                <a href="{{url('objetivos-estrategicos-alinear')}}">
                    <i class="fa fa-exchange"></i><span class="link-title"> Alinear objetivos estratégicos</span>
                </a>
            </li>

            <!--
            <li>
                <a href="{{url('objetivos-estrategicos-ti-alinear')}}">
                    <i class="fa fa-exchange"></i><span class="link-title"> Alinear objetivos estratégicos TI</span>
                </a>
            </li>
            -->

            <li class="nav-divider"></li>
            <li>
                <a href="{{url('cascada-metas')}}">
                    <i class="fa fa-line-chart"></i><span class="link-title"> Metas en cascada de COBIT</span>
                </a>
            </li>
            <li class="nav-divider"></li>
            <li>
                <a href="{{url('reporte-metas-ti')}}">
                    <i class="fa fa-area-chart"></i><span class="link-title"> Reporte Metas TI COBIT</span>
                </a>
            </li>
            <li>
                <a href="{{url('reporte-procesos-cobit')}}">
                    <i class="fa fa-list-alt"></i><span class="link-title"> Reporte Procesos COBIT</span>
                </a>
            </li>
            <li class="nav-divider"></li>
            <!--
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span class="link-title">Reportes</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="collapse">
                    <li>
                        <a href="{{url('reporte-metas-ti')}}">
                            <i class="fa fa-area-chart"></i><span class="link-title"> Reporte Metas TI COBIT</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('reporte-procesos-cobit')}}">
                            <i class="fa fa-list-alt"></i><span class="link-title"> Reporte Procesos COBIT</span>
                        </a>
                    </li>
                </ul>
            </li>
            -->
        </ul>
    </div>

    <div id="content">
        <div class="outer">
            <div class="inner bg-light lter">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="Footer bg-dark dker">
    <p>Gerencia de Sistemas - Cascada de metas 2016  by Soles Cavero, Edilberto</p>
</footer>

@yield('modals')

<script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/js/notify.min.js')}}"></script>
<script src="{{asset('assets/lib/metismenu/metisMenu.js')}}"></script>
<script src="{{asset('assets/lib/screenfull/screenfull.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/style-switcher.js')}}"></script>
<script src="{{asset('assets/js/perspectives/message.js')}}"></script>

@yield('scripts')

</body>

</html>
