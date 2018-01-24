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
              var op = $("#slectParroquia option:selected").val();
            var url="{{ URL::to('/direccion/zonas') }}/"+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#zonaAjaxL').empty().html(data);
                }); 
        });
      });

</script>