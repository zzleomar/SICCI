<nav class="navbar navbar-dark bg-dark" id="navPerso">
            @guest
                        {{--  Links de autenticacion  --}} 
                <ul class="nav justify-content-end" style="margin-top: 5px;margin-right: 10px;">

                <li class="nav-item">
                <a class="navbar-brand" href="#" id="titulo">SICCI</a>
              </li>
              
            </ul>
            @else
            <ul class="nav nav-pills flex-column flex-sm-row " id="navP">
                @if( Auth::user()->tipo=='Administrador')
                <li class="nav-item">
                <a class="navbar-brand" href="{{ URL::to('/administrador') }}" id="titulo">SICCI</a>
              </li>
                <li class="nav-item d-flex align-content-center flex-wrap" id="adminComerciantes">
                    <a class="flex-sm-fill text-sm-center nav-link" href="{{ URL::to('/administrador/comerciantes') }}"> Comerciantes</a>
                </li>
                    <li class="nav-item d-flex align-content-center flex-wrap" id="adminProductos"><a class="flex-sm-fill text-sm-center nav-link" href="{{ URL::to('/administrador/productos') }}">Productos</a></li>
                   <li class="nav-item d-flex align-content-center flex-wrap"> <a class="flex-sm-fill text-sm-center nav-link" href="#">Ventas</a>
                  </li>
                  <li class="nav-item d-flex align-content-center flex-wrap"> <a class="flex-sm-fill text-sm-center nav-link" href="#">Zonas de Comercio
                  </a>
                  </li>
                  @else
                  <li class="nav-item d-flex align-content-center flex-wrap">
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">Cargar Producto</a>
                  </li>
                  <li class="nav-item d-flex align-content-center flex-wrap">
                    <a class="flex-sm-fill text-sm-center nav-link" href="#">Registrar Venta</a>
                  </li>
                  @endif
                </ul>
                <ul class="nav justify-content-end" style="margin-top: 5px;margin-right: 10px;">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                          
                                {{ Auth::user()->tipo.": ".Auth::user()->nombres." ".Auth::user()->apellidos }}                              
                        </a>
                        <div class="dropdown-menu" aria-labelledby="userDropdown">                          <a href="#" class="dropdown-item">
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-user" aria-hidden="true"></i> Perfil                  
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-lock" aria-hidden="true"></i> Cambiar contraseña       
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" class="dropdown-item">
                                <i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
                    @endguest
             </nav>