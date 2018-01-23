<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a  class="btn btn-primary" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProductoNew1" aria-expanded="true" aria-controls="collapseProductoNew1">
			   Producto
        </a>
        <a class="collapsed btn btn-primary" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseProductoNew2" aria-expanded="false" aria-controls="collapseProductoNew2">
			    Comerciante
        </a>
      </h4>
    </div>
    <div id="collapseProductoNew1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row" >
						<div class="form-group col-md-12">
					      <label for="inputState">Proveedor</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="{{ $carga->proveedor->nombre}}">
						</div>
					</div>
						  	<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Producto</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="ejem. 23806671" value="{{ $carga->producto->nombre}}">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Cantidad</label>
					      <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Email" value="{{ $carga->cantidad }}" readonly>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Costo de Adquisición</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputEmail4" placeholder="Ingrese Nombre" value="{{ number_format($carga->precio_adquirido, 2, ',', '.') }}">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Costo de Venta</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputPassword4" placeholder="Ingrese Apelido" value="{{ number_format($carga->precio_venta, 2, ',', '.') }}">
					    </div>
					  </div>

					<div class="row">
						<div class="form-group col-md-8">
					      <label for="inputState">Ubicación del Comercio</label>

					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="{{ $carga->local->direccion() }}">
						</div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Zona</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" value="Mercado Municipal">
					    </div>
					</div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div id="collapseProductoNew2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
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
					  <div class="form-row">
					    <div class="form-group col-md-8">
					      <label for="inputState">Ubicación</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Sector/Avenida/Apartamento" value="Estado Sucre, Montes Cumanacoa">
					    </div>
						<div class="form-group col-md-4">
					      <label for="inputCity">Carnet de la Patria</label>
					      <input type="text" readonly class="form-control form-control-lg" id="inputCity" placeholder="Nro. Serial" value="0001242124">
					    </div>
					  </div>
      </div>
    </div>
  </div>
</div>
