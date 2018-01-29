@if((sizeof($zonas))==0)

    <script type="text/javascript">

    $(document).ready(function(){
        toastr.warning('Esta parroquia no posee Zonas Registradas.', 'Warning Alert', {timeOut: 5000});
      });

</script>
@else
<label for="inputState">Zona</label>
      <select id="zonaidS" class="form-control form-control-lg" name="zona" required>
        <option selected value="">Seleccione ...</option>
        @foreach($zonas as $zona)
          <option value="{{ $zona->id}}">{{ $zona->nombre}}</option>
        @endforeach
      </select>

        <script type="text/javascript">

    $(document).ready(function(){
      $("#zonaidS").change(function(){
             $(".oculto").css("display", "initial"); 
        });
      });

</script>

@endif



    


