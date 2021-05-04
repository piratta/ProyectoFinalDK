
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
                               
                                   
                                    @foreach ($pagas as $paga)
                                        @if($paga->nivel=="ESO" && $paga->estat=="actiu")

                                              <li><a href="pagos" id= '{{$paga->id}}' class="nav-link">{{$paga->comanda}}</a></li>
                                         @endif
                                    @endforeach
                                
                                    
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    BATXILLERAT
                                </a>
                                <ul>
                                @foreach ($pagas as $paga)
                                        @if($paga->nivel=="BAT" && $paga->estat=="actiu")

                                              <li><a href="pagos" id= '{{$paga->id}}' class="nav-link">{{$paga->comanda}}</a></li>
                                         @endif
                                    @endforeach
                                </ul>                       
                            </li>
                            <li>
                                <a href="#">
                                    CICLES FORMATIUS
                                </a>
                                <ul>
                                @foreach ($pagas as $paga)
                                        @if($paga->nivel=="CF" && $paga->estat=="actiu")

                                              <li><a href="/pagos/{{$paga->id}}" id= '{{$paga->id}}' class="nav-link">{{$paga->comanda}}</a></li>


                                         @endif
                                    @endforeach
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