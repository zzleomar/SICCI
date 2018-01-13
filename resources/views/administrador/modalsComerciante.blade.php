<!-MODAL NUEVO COMERCIANTE--->
<form method="post" id="nuevaComercianteForm" name="nuevaComercianteForm" action="{{ URL::to('/administrador/comerciantes/registrar') }}">   
                        {{ csrf_field() }}

    <div class="modal fade bd-example-modal-lg" id="NuevaComercianteModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h6 class="" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Nuevo Comerciante</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body" style="font-weight: 600">
      		<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Nro. Cedula</label>
			      <input type="text" class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" name="cedula" required>
			      @if ($errors->has('cedula'))
                    <span class="help-block">
                        <strong>Este número de Cedula esta registrado</strong>
                    </span>
                  @endif
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Email</label>
			      <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="ejemplo@correo.com" name="email" required>
			      @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>Este correo se encuentra registrado</strong>
                    </span>
                  @endif
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Nombre</label>
			      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" name="nombre" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Apellido</label>
			      <input type="text" class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" name="apellido" required>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail4">Tlf Movil</label>
			      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="04145682375" name="nombre" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputPassword4">Tlf fijo</label>
			      <input type="text" class="form-control form-control-lg" id="inputPassword4" placeholder="02932344563" name="apellido" required>
			    </div>
			  </div>
				<div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="inputState">Estado</label>
			      <select id="inputState" class="form-control form-control-lg" name="estado" required>
			        <option selected>Seleccione ...</option>
			        <option>Anzoateguis</option>
			        <option>Amazonas</option>
			        <option>Bolivar</option>
			        <option>Sucre</option>
			        <option>...</option>
			      </select>
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputState">Municipio</label>
			      <select id="inputState" class="form-control form-control-lg" name="municipio" required>
			        <option selected>Seleccione ...</option>
			        <option>Montes</option>
			        <option>Sucre</option>
			        <option>Mejias</option>
			        <option>...</option>
			      </select>
			    </div>
				<div class="form-group col-md-4">
			      <label for="inputPassword4">Ciudad</label>
			      <input type="text" class="form-control form-control-lg" id="inputCity" placeholder="ciudad" name="ciudad" required>
			    </div>
			</div>
			  <div class="form-row">
			    <div class="form-group col-md-8">
			      <label for="inputState">Ubicación</label>
			      <input type="text" class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" name="ubicacion" required>
			    </div>
				<div class="form-group col-md-4">
			      <label for="inputCity">Carnet de la Patria</label>
			      <input type="text" class="form-control form-control-lg" id="inputCity" placeholder="Nro. Serial" name="carnet" required>
			    </div>
			  </div>
      </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-lg btn-primary" id="BotonGuardarComerciante">Registrar</button>
    </div>
        
     </div>
  </div></div>
  </form>	

		<!-MODAL COMERCIANTE--->



	<div class="modal fade bd-example-modal-lg" id="ComercianteModal" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header  bg-success text-white">
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Comerciante John Dere</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body" style="font-weight: 600">

		<div id="collapseComerciante" data-children=".item">
			 <a class="btn btn-primary" data-toggle="collapse" data-parent="#collapseComerciante" href="#collapseComerciante1" aria-expanded="true" aria-controls="collapseComerciante1">
			    Información Personal
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
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="23806671">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="dmy.leomar@gmail.com" readonly>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Nombre</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" value="Leomar Alexander">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Apellido</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" value="Esparragoza M.">
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
						<div class="form-group col-md-8">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="Estado Sucre, Montes Cumanacoa">
						</div>
					</div>
					  <div class="form-row">
					    <div class="form-group col-md-8" style="display: none;">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento">
					    </div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Carnet de la Patria</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Nro. Serial">
					    </div>
					  </div>
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
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Disponibilidad</th>
                                                    <th>Precio de Adquisición</th>
                                                    <th>Precio de Venta</th>
                                                    <th>Vendidos</th>
                                                </tr>
                                            </thead>
                                            <tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>Harina de Maiz</td>
                                                    <td>120</td>
                                                    <td>35.678,00</td>
                                                    <td>45.700,00</td>
                                                    <td>100</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                            	<tr class="col-hover">
                                                    <td>Harina de Trigo</td>
                                                    <td>80</td>
                                                    <td>65.500,00</td>
                                                    <td>80.700,00</td>
                                                    <td>70</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>Arroz</td>
                                                    <td>72</td>
                                                    <td>28.600,00</td>
                                                    <td>35.700,00</td>
                                                    <td>37</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>Pasta de tomate</td>
                                                    <td>65</td>
                                                    <td>65.500,00</td>
                                                    <td>80.700,00</td>
                                                    <td>22</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>Salsa de tomate</td>
                                                    <td>15</td>
                                                    <td>85.420,00</td>
                                                    <td>110.530,00</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody><tbody data-toggle="modal" data-target="#ComercianteModal">
                                                <tr class="col-hover">
                                                    <td>Matequilla</td>
                                                    <td>65</td>
                                                    <td>65.500,00</td>
                                                    <td>80.700,00</td>
                                                    <td>22</td>
                                                </tr>
                                            </tbody>
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
			</div>
		</div>


      		
      </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-lg btn-close" id="BotonGuardarComerciante" data-dismiss="modal">Cerrar</button>
    </div>
        
     </div>
  </div></div>
</div>