<div id="collapseComerciante" data-children=".item">
			 <a class="btn btn-primary" data-toggle="collapse" data-parent="#collapseComerciante" href="#collapseComerciante1" aria-expanded="true" aria-controls="collapseComerciante1">
			    Información Personal
			    </a>
			 <a class="btn btn-primary" data-toggle="collapse" data-parent="#collapseComerciante" href="#collapseComerciante3" aria-expanded="false" aria-controls="collapseComerciante3">
			    Locales
			    </a>
			    <a class="btn btn-primary" data-toggle="collapse" data-parent="#collapseComerciante" href="#collapseComerciante2" aria-expanded="false" aria-controls="collapseComerciante2">
			    Productos
			    </a>
			     
					<div class="item" >
		        		<div id="collapseComerciante1" class="collapse show" role="tabpanel">
						  <div class="card card-body">
						  	<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Nro. Cedula</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="{{ $user->cedula }}">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="{{ $user->email }}" readonly>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Nombre</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" value="{{ $user->nombres }}">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Apellido</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" value="{{ $user->apellidos }}">
					    </div>
					  </div>
						<div class="form-row" style="display: none;">
					    <div class="form-group col-md-4">
					      <label for="inputState">Estado</label>
					      <select id="inputState" class="form-control form-control-lg">
					        <option selected>Anzoateguis</option>
					        <option selected>Amazonas</option>
					        <option selected>Bolivar</option>
					        <option selected>Sucre</option>
					        <option>...</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">Municipio</label>
					      <select id="inputState" class="form-control form-control-lg">
					        <option selected>Montes</option>
					        <option selected>Sucre</option>
					        <option selected>Mejias</option>
					        <option>...</option>
					      </select>
					    </div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Ciudad</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity">
					    </div>
					</div>
					<div class="row">
						<div class="form-group col-md-8"  style="display: none;">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="Estado Sucre, Montes Cumanacoa">
						</div>
					</div>
					  <div class="form-row">
					    <div class="form-group col-md-8">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="{{ 'Edo. '.$user->estado->nombre.' Mun. '.$user->municipio->nombre.' Parroquia '.$user->parroquia->nombre }}">
					    </div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Carnet de la Patria</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Nro. Serial" value="{{ $user->comerciante->cod_carnet }}">
					    </div>
					  </div>
				  </div>
				</div>
			</div>
			<div class="item" style="text-align: center;">
        		<div id="collapseComerciante3" class="collapse" role="tabpanel">
				  <div class="card card-body">
				  	<div class="row">
					  	<div class="form-group col-md-2" style="text-align: center;">
						      <label for="inputState">Total de Comercios</label>
						  </div>
						  <div class="form-group col-md-2">
						      <input type="number" readonly class="form-control form-control-lg" id="cantidadN" placeholder="Sector/Avenida/Apartamento" value="{{ sizeof($locales) }}">
						  </div>
				  	</div>
				  	@foreach($locales as $local)
					<div class="row">
						<div class="form-group col-md-8">
							<label>Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="cantidadN" value="{{ 'Edo. '.$local->zona->estado->nombre.' Mun. '.$local->zona->municipio->nombre.' Parroquia '.$local->zona->parroquia->nombre }}">
						</div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Zona</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" value="{{ $local->zona->nombre }}">
					    </div>
					</div>
					@endforeach
				  </div>
				</div>
			</div>
			<div class="item" >
        		<div id="collapseComerciante2" class="collapse" role="tabpanel">

				  <div class="card card-body">

						<div class="col-md-12 col-sm-12 col-xs-12" style="margin: auto;">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Inventario
                                </div> 
                                <div class="panel-body">
                                    <div class="table-responsive divtablaAux">
                                        <table class="table table-striped table-hover tablaAux">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Disponibilidad</th>
                                                    <th>Precio de Adquisición</th>
                                                    <th>Precio de Venta</th>
                                                    <th>Vendidos</th>
                                                </tr>
                                            </thead>
                                            	@foreach($productos as $producto)
                                            <tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>{{ $producto['producto']->nombre }}</td>
                                                    <td>{{ $producto['disponivilidad'] }}</td>
                                                    <td>{{ $producto['adqui'] }}</td>
                                                    <td>{{ $producto['venta'] }}</td>
                                                    <td>{{ $producto['vendidos'] }}</td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

					  <nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center pagination-sm">
						<li class="page-item"><a class="page-link" href="#">Previo</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Sig</a></li>
						</ul>
						</nav>
				  </div>
				</div>