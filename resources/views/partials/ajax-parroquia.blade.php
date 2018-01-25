<label for="inputState">Parroquia</label>
      <select id="slectParroquia{{$id}}" class="form-control form-control-lg" name="parroquia{{$id}}" required>
        <option selected value="">Seleccione ...</option>
        @foreach($parroquias as $parroquia)
        	<option value="{{ $parroquia->id}}">{{ $parroquia->nombre}}</option>
        @endforeach
      </select>
@if($id!='1')

<script type="text/javascript">
    $(document).ready(function(){
    	$("#slectParroquia"+{{$id}}).change(function(){
             var etiqueta="#slectParroquia"+'{{$id}}'+" option:selected";
              var op = $(etiqueta).val();
            var url="{{ URL::to('/direccion/zonas') }}/"+op; 
             //alert(url);
                $.get(url,function(data){ 
                  $('#zonaAjaxL').empty().html(data);
                }); 
        });
      });

</script>
@else
<script type="text/javascript">

    $(document).ready(function(){
      $("#slectParroquia"+{{$id}}).change(function(){
             $("#ubiAjax").css("display", "initial"); 
             
        });
      });

</script>
@endif