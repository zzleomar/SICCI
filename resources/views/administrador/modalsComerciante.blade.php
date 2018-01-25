<!-MODAL NUEVO COMERCIANTE--->
@php
	$url=URL::to('/administrador/comerciantes/registrar');
@endphp
<form method="post" id="nuevaComercianteForm" name="nuevaComercianteForm" onsubmit=" return formNuevoComerciante('{{$url}}')">   
                        {{ csrf_field() }}

    <div class="modal fade bd-example-modal-lg" id="NuevaComercianteModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header back-footer-green  text-white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h6 class="" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Nuevo Comerciante</h6>
        </div>
      
      	<div class="modal-body" style="font-weight: 600">
			<div class="panel-group" id="collapseComercianteNew" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a  class="btn btn-primary" role="button" data-toggle="collapse" data-parent="#collapseComercianteNew" href="#collapseComercianteNew1" aria-expanded="true" aria-controls="collapseComercianteNew1" onclick="cambio('1')">
			  				 Comerciante
				        </a>
				        <a class="collapsed btn btn-primary" role="button" data-toggle="collapse" data-parent="#collapseComercianteNew" href="#collapseComercianteNew2" aria-expanded="false" aria-controls="collapseComercianteNew2" onclick="cambio('2')">
							    Local
				        </a>
				        <a class="collapsed btn btn-primary" role="button" data-toggle="collapse" data-parent="#collapseComercianteNew" href="#collapseComercianteNew3" aria-expanded="false" aria-controls="collapseComercianteNew3" onclick="cambio('3')">
							    Producto
				        </a>
				      </h4>
				    </div>
				    <div id="collapseComercianteNew1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				      	<div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Nro. Cedula</label>
						      <input type="text" class="form-control form-control-lg" id="cedula" placeholder="ejem. 23806671" name="cedula" >
						      @if ($errors->has('cedula'))
			                    <span class="help-block">
			                        <strong>Este número de Cedula esta registrado</strong>
			                    </span>
			                  @endif
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Email</label>
						      <input type="text" class="form-control form-control-lg" id="email" placeholder="ejemplo@correo.com" name="email" >
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
						      <input type="text" class="form-control form-control-lg" id="nombre" placeholder="Ingrese Nombre" name="nombre" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Apellido</label>
						      <input type="text" class="form-control form-control-lg" id="apellido" placeholder="Ingrese Apelido" name="apellido" >
						    </div>
						  </div>
						  <div class="form-row">
						    <div class="form-group col-md-6">
						      <label for="inputEmail4">Tlf Movil</label>
						      <input type="text" class="form-control form-control-lg" id="tlfM" placeholder="04145682375" name="tlfM" >
						    </div>
						    <div class="form-group col-md-6">
						      <label for="inputPassword4">Tlf fijo</label>
						      <input type="text" class="form-control form-control-lg" id="tlfF" placeholder="02932344563" name="tlfF" >
						    </div>
						  </div>
							<div class="form-row">
						    <div class="form-group col-md-4">
						      <label for="inputState">Estado</label>
						      <select id="selectest" class="form-control form-control-lg" name="estadoC" >
						        <option value="1" selected>Sucre</option>
						      </select>
						    </div>
						    <div class="form-group col-md-4" id="municipioAjaxC">
						      <label for="selectmun">Municipio</label>
						      <select class="form-control form-control-lg" name="municipioC"  id="selectmun">
						        <option selected value="">Seleccione ...</option>
						        @foreach($estado->municipios as $municipio)
						       		 <option value="{{ $municipio->id}}">{{ $municipio->nombre}}</option>
						        @endforeach
						      </select>
						    </div>
							<div class="form-group col-md-4" id="parroquiaAjaxC">
						      <!--AJAX PARROQUIA -->
						    </div>
						</div>
						  <div class="form-row" style="display: none;" id="ubiAjax">
						    <div class="form-group col-md-8" >
						      <label for="inputState">Ubicación</label>
						      <input type="text" class="form-control form-control-lg" id="ubicacion" placeholder="Sector/Avenida/Apartamento" name="ubicacion" >
						    </div>
							<div class="form-group col-md-4">
						      <label for="inputCity">Carnet de la Patria</label>
						      <input type="text" class="form-control form-control-lg" id="carnet" placeholder="Nro. Serial" name="carnet" >
						    </div>
						  </div>
				      </div>
				  </div>
				  <div id="collapseComercianteNew2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				      	<h4>Introdusca la información del local</h4>
				      	<div class="form-group col-md-4">
                  <label for="inputState">Estado</label>
                  <select id="inputState" class="form-control form-control-lg" name="estadoL" >
                    <option value="1" selected>Sucre</option>
                  </select>
                </div>
                <div class="form-group col-md-4" id="municipioAjaxC">
                  <label for="selectmun">Municipio</label>
                  <select class="form-control form-control-lg" name="municipioL"  id="selectmun2">
                    <option selected>Seleccione ...</option>
                    @foreach($estado->municipios as $municipio)
                       <option value="{{ $municipio->id}}">{{ $municipio->nombre}}</option>
                    @endforeach
                  </select>
                </div>
              <div class="form-group col-md-4" id="parroquiaAjaxC2">
                  <!--AJAX PARROQUIA -->
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4" id="zonaAjaxL">
                  <!--AJAX ZONA -->
                </div>
    
              </div>
				      </div>
				  </div>
				  <div id="collapseComercianteNew3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
						<div class="form-group col-md-4">
			                  <label for="inputState">Familia del Producto</label>
			                  <select id="familiaSelect" class="form-control form-control-lg" name="familia" >
			                    <option value="1" selected>Seleccione...</option>
			                    @foreach($familias as $familia)
			                       <option value="{{ $familia->id}}">{{ $familia->nombre}}</option>
			                    @endforeach
			                  </select>
			                </div>
			                <div class="form-group col-md-4" id="productoAjaxC">
			                </div>
				      </div>
				  </div>
		</div></div>
      		
      </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-lg btn-primary" id="BotonGuardarComerciante" style="display: none;">Registrar</button>
    <button type="button" class="btn btn-lg btn-primary" id="BotonContinuarGuardarComerciante1" onclick="continuar('1')">Continuar</button>
    <button type="button" class="btn btn-lg btn-primary" id="BotonContinuarGuardarComerciante2" style="display: none;" onclick="continuar('2')"">Continuar</button>
    </div>
        
     </div>
  </div></div>
  </form>	

		<!-MODAL COMERCIANTE--->



	<div class="modal fade bd-example-modal-lg" id="ComercianteModal" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header back-footer-green text-white">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Comerciante John Dere</h5>
        </div>
      
      <div class="modal-body" style="font-weight: 600" id="ModalAjaxModificarComerciante">

		
			</div>
			


      		
    <div class="modal-footer">
    <button type="submit" class="btn btn-lg btn-close" id="BotonGuardarComerciante" data-dismiss="modal">Cerrar</button>
    </div>
        </div>
     </div>
  </div>

<!-- NOTIFICACIONES -->

<div class="modal fade bd-example-modal-lg" id="NotificacionesModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h6 class="" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Notificación</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      
      <div class="modal-body" style="font-weight: 600">
      		<div class="form-group col-md-12">
		      <label for="inputPassword4">Notificación de Nuevo Producto</label>
			</div>
			<div class="card card-body">
					  <div class="row">
						<div class="form-group col-md-12">
					      <label for="inputState">Proveedor</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="Inverciones Tokata C.a">
						</div>
					</div>
						  	<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Producto</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="Harina de maiz">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Cantidad</label>
					      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="320 Unidades" readonly>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Costo de Adquisición</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" value="34,800">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Costo de Venta</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" value="50,000">
					    </div>
					  </div>
					 </div>
					 <div class="form-group col-md-12">
		      <label for="inputPassword4">Notificación de Registro de Ventas</label>
			</div>
			<div class="card card-body">
						  	<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Producto</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="Harina de maiz">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Ingreso Registrado</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="102.234,00 Bs">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Vendidos</label>
					      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="20 Unidades" readonly>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Disponibles</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" value="134 Unidades">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Costo de Venta</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" value="50,000">
					    </div>
					    <div class="form-group col-md-6">
					    	<span class="badge badge-pill badge-warning badge-aux">Ver más...</span>
					    </div>
					  </div>
					 </div>
			 <div class="form-group col-md-12">
		      <label for="inputPassword4">Notificación de Actualización de información personal</label>
			</div>
			<div class="card card-body">
				<div class="form-row">
				<div class="form-group col-md-6">
					      <label for="inputPassword4">Nro. Cedula</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="23806671">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Nombre</label>
					      <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="Leomar Alexander Esparragoza M." readonly>
					    </div>
					  </div>
							<h6 class="submodalcenter">Datos Nuevos</h6>
					 <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Tlf Movil</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="0412 1244 124">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Tlf Fijo</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="0293 1248 124">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="nuevocorreo@gmail.com" readonly>
					    </div>
					    <div class="form-group col-md-6">
					    	<span class="badge badge-pill badge-warning badge-aux">Ver más...</span>
					    </div>
					  </div>
				</div>
				<div class="form-group col-md-12">
		      <label for="inputPassword4">Notificación de Eliminar</label>
			</div>
			<div class="card card-body">
							<h5 class="submodalcenter">Cormecio Eliminado</h5>
							<h6 class="submodalcenter2">Información del Dueño</h6>


				<div class="form-row">
				<div class="form-group col-md-6">
					      <label for="inputPassword4">Nro. Cedula</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="23806671">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Nombre</label>
					      <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="Leomar Alexander Esparragoza M." readonly>
					    </div>
					  </div>
					 <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Ubicaci</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="0412 1244 124">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Tlf Fijo</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="0293 1248 124">
					    </div>
					  </div>
						<h6 class="submodalcenter2">Información del Comercio</h6>
					  <div class="row">
						<div class="form-group col-md-8">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="Estado Sucre, Montes Cumanacoa">
						</div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Zona</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" value="Mercado Municipal">
					    </div>
					</div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					    	<span class="badge badge-pill badge-warning">Ver más...</span>
					    </div>
					  </div>
				</div>
  </div></div></div></div>