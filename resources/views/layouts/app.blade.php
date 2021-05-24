<!doctype HTML>
<html lang="en">

<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script src='js/misFunciones.js'></script>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INSCamiDeMar</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifications.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" media="screen" />

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-warning  text-white">
       
        <a title="Ins Camí de mar" href="http://proyectofinaldk.com/">   <img id="logo" src="/imgINSCDM/logo.png" alt="Logo InsCamideMar" /></a>

    
        <div class="app-header__logo" >
            <div class="header__pane">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic "
                            data-class="closed-sidebar">
                            <span class="hamburger-box">

                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content" >
                <div class="app-header-left "  >
                <div class="media">
                @if(Auth::User())
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Tanca sesió') }}
                        </a>

                        @if(Auth::user()-> admin == 1)
                        <a class="dropdown-item" href="/admin">
                            {{ __('Gestio') }}
                        </a>
                        @endif
                        
                        
                             
                     <!--LISTA DE OPCION USUARIOS-->
                        
                        @else<a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            {{ __('Inicia sesió') }}
                        </a>
                        @endif

                
                        
                     <!--   FIN LISTA -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
               

                </div>
                <div class="app-header-right">
                
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        @include('layouts.menuadmin')
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    
                                <div class="widget-heading">
                                        @if (Auth::user())
                                            {{Auth::user()->name}}
                                        @else
                                            No has iniciat sesió
                                        @endif
                                </div>
                                    <div class="widget-subheading">
                                        
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <i class="fas fa-user fa-2x pr-1 pl-1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/notifications.js') }}"></script>
        <script type="text/javascript" src="https://kit.fontawesome.com/b79e6d3749.js" crossorigin="anonymous"></script>

<!-- Menu dinamico -->

<!-- Menu Admin -->

<!-- fin Menu Admin -->


<!-- fin Menu dinamico -->


<!--footer -->

<!-- fin de footer -->


</body>

</html>