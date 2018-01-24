

      @if((sizeof($productos))==0)

    <script type="text/javascript">

    $(document).ready(function(){
        toastr.warning('No hay productos de esta clase registrados.', 'Warning Alert', {timeOut: 5000});
      });

</script>
@else

<label for="inputState">Producto</label>
      <select id="slectParroquia" class="form-control form-control-lg" name="parroquia" required>
        <option selected>Seleccione ...</option>
        @foreach($productos as $producto)
        	<option value="{{ $producto->id}}">{{ $producto->nombre}}</option>
        @endforeach
      </select>

@endif