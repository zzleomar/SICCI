<!-- Producto por Aprovar o Reportar-->

	<div class="modal fade bd-example-modal-lg" id="ProductoREVIWModal" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header back-footer-green text-white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h5 class="modal-title" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Comerciante John Dere</h5>
        </div>
      
      <div class="modal-body" id="ajax-carga-reciente" style="font-weight: 600">
      	

      		
      </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-lg btn-success" id="BotonGuardarComerciante" data-dismiss="modal">Aprobar</button>
    <button type="submit" class="btn btn-lg btn-danger" id="BotonGuardarComerciante" data-dismiss="modal">Reportar</button>
    <button type="submit" class="btn btn-lg btn-secondary" id="BotonGuardarComerciante" data-dismiss="modal">Cerrar</button>
    </div>
        
     </div>
  </div></div>

<!-- NOTIFICACIONES -->

<div class="modal fade bd-example-modal-lg" id="NotificacionesModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header  back-footer-green text-white">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h6 class="" id="exampleModalLabel" style="font-size: 25px;font-weight: 700;">Notificación</h6>
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