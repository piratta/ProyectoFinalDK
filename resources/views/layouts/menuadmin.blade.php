<div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            @if(Auth::User())
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
                                                {{ __('Tanca sesió') }}
                                            </a>
                                            
                                            <a class="dropdown-item" href="/admin">
                                                {{ __('Gestion') }}
                                            </a>
                                            
                                          
                                            
                                            <!-- LISTA DE OPCION USUARIOS-->
                                           
                                            @else<a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
                                                {{ __('Inicia sesió') }}
                                            </a>
                                            @endif

                                    
                                           
                                            <!--FIN LISTA-->

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                        </div>