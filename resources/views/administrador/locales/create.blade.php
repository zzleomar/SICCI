
<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header back-footer-green">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

        <h4 class="modal-title" id="myModalLabel">Nuevo Local</h4>

      </div>

      <div class="modal-body">



      		<form data-toggle="validator" action="{{ URL::to('administrador/locales/') }}" method="POST">

      			<div class="form-group">

					<label class="control-label" for="title">Comerciante</label>

					<input type="text" name="cedula" class="form-control" data-error="Please enter title." required placeholder="Ingrese Nro. cédula" />

					<div class="help-block with-errors"></div>

				</div>
        <div style="display: table;">
                <div class="form-group col-md-4">
                  <label for="inputState">Estado</label>
                  <select id="inputState" class="form-control form-control-lg" name="estado" required>
                    <option value="1" selected>Sucre</option>
                  </select>
                </div>
                <div class="form-group col-md-4" id="municipioAjaxC">
                  <label for="selectmun">Municipio</label>
                  <select class="form-control form-control-lg" name="municipio" required id="selectmun2">
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
                    <button type="submit" class="btn crud-submit btn-success oculto" style="display: none; position: relative; right: -10px; top: 25px;">Cuardar</button>
                

</div>
				

      		</form>

      </div>

    </div>

  </div>

</div>