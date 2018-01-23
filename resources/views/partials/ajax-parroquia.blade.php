<label for="inputState">Parroquia</label>
      <select id="slectParroquia" class="form-control form-control-lg" name="parroquia" required>
        <option selected>Seleccione ...</option>
        @foreach($parroquias as $parroquia)
        	<option value="{{ $parroquia->id}}">{{ $parroquia->nombre}}</option>
        @endforeach
      </select>
<script type="text/javascript">

    $(document).ready(function(){
    	$("#slectParroquia").change(function(){
             $("#ubiAjax").css("display", "initial"); 
        });
      });

</script>