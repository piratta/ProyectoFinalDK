<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INSCamiDeMar</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/notifications.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-warning  text-white">
        <img id="logo" src="imgINSCDM/logo.png">
    
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
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
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
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
                                                {{ __('Inicia sesió') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    
                                <div class="widget-heading">
                                        @if (Auth::user())
                                            {{Auth::user()->name}}
                                        @else
                                            Not logged in user
                                        @endif
                                </div>
                                    <div class="widget-subheading">
                                        Usuario
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
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
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
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu </li>
                            <li>
                                <a href="#">ESO</a>
                                <ul>
                                    <li><a href="pagos" class="nav-link">PAGAMENT</a></li>
                                    <li><a href="llogerTaquilles" class="nav-link">LLOGUER TAQUILLES</a></li>
                                    <li><a href="reciclaje" class="nav-link">Reciclatge llibres 4t d'ESO</a></li>
                                    <li><a href="reciclajeAyuntamiento" class="nav-link">Reciclatge llibres Ajuntament</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    BATXILLERAT
                                </a>
                                <ul>
                                    <li><a href="pagos" class="nav-link">PAGAMENT</a></li>
                                    <li><a href="reciclaje" class="nav-link">Reciclatge llibres 4t d'ESO</a></li>
                                    <li><a href="reciclajeAyuntamiento" class="nav-link">Reciclatge llibres Ajuntament</a></li>
                                </ul>                       
                            </li>
                            <li>
                                <a href="#">
                                    CICLES FORMATIUS
                                </a>
                                <ul>
                                    <li><a href="pagos" class="nav-link">PAGAMENT</a></li>
                                    <li><a href="reciclaje" class="nav-link">Reciclatge llibres 4t d'ESO</a></li>
                                    <li><a href="reciclajeAyuntamiento" class="nav-link">Reciclatge llibres Ajuntament</a></li>
                                </ul>

                            </li>
                            @if (Auth::user())
                            @if(Auth::user() -> admin == 1)
                            <li>
                                <a href="/admin">
                                    ADMINISTACIÓ
                                </a>
                                <ul> <a href="adminUsuarios">Usuarios</a></ul>
                                <ul> <a href="adminPagos">Pagos</a></ul>
                                <ul> <a href="adminCategorias">Categorias</a></ul>
                            </li>@endif     
                            @endif 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/notifications.js') }}"></script>
        <script type="text/javascript" src="https://kit.fontawesome.com/b79e6d3749.js" crossorigin="anonymous"></script>
</body>

</html>