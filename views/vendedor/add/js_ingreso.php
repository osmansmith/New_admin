<script>
 	$('#proyecto').change(function(){
		var proyecto = $( this ).val();
        
		$.ajax({
			type: 'POST',
			url: ("<?php echo URL?>vende/procesa_ingreso"),
			data:"token=Proyecto&proyecto="+proyecto,
			success: function(data) {
				 $('#modelo').html(data);
			}
		})								
		//$('#valor_porcentaje').html('');
		$('#credito').val('');
		$('#directo').val('');
	});
    $('#boton_credito').click(function(){
        
		var_porcentaje = $('#porcentaje').val();
		var_valor_vivienda = $('#valor_vivienda').val();
        //alert(var_valor_vivienda);
        var token = "btn_credito";
		$.ajax({
			type: 'POST',
			url: ("<?php echo URL?>vende/procesa_ingreso"),
			data:"porcentaje="+var_porcentaje+"&valor_vivienda="+var_valor_vivienda+"&token="+token,
			dataType:'json',
			success: function(data) {
                alert("aca");
				//$('#valor_porcentaje').html(data.formato);
				$('#credito').val(data.valor);
				$('#directo').val(data.resta);
			},
            error: function(jqXHR, textStatus, errorThrown){
                 if (jqXHR.status === 0) {

    alert('Not connect: Verify Network.');

  } else if (jqXHR.status == 404) {

    alert('Requested page not found [404]');

  } else if (jqXHR.status == 500) {

    alert('Internal Server Error [500].');

  } else if (textStatus === 'parsererror') {

    alert('Requested JSON parse failed.');

  } else if (textStatus === 'timeout') {

    alert('Time out error.');

  } else if (textStatus === 'abort') {

    alert('Ajax request aborted.');

  } else {

    alert('Uncaught Error: ' + jqXHR.responseText);

  }
            }
		})
	});


</script>