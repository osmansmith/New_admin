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
		var_modelo = $('#modelo').val();
        var token = "btn_credito";
		$.ajax({
			type: 'POST',
			url: ("<?php echo URL?>vende/procesa_ingreso"),
			data:"porcentaje="+var_porcentaje+"&modelo="+var_modelo+"&token="+token,
			dataType:'json',
			success: function(data) {
				//$('#valor_porcentaje').html(data.formato);
				$('#credito').val(data.valor);
				$('#directo').val(data.resta);
			}
		})
	});


</script>