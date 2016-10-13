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
		/*$.ajax({
			type: 'POST',
			url: ("select_porcentaje_valor.php"),
			data:"nada=1",
			success: function(data) {
				 $('#porcentaje').html(data);
			}
		})	*/	
		//$('#valor_porcentaje').html('');
		$('#credito').val('');
		$('#directo').val('');
	});


</script>