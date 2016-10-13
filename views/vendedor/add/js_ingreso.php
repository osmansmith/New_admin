<script>
 	$('#proyecto').change(function(){
		proyecto=$('#proyecto').val();
        
		$.ajax({
			type: 'POST',
			url: ("select_proyecto.php"),
			data:"token='proyecto'&proyecto="+proyecto,
			success: function(data) {
				 $('#modelo').html(data);
			}
		})
		$.ajax({
			type: 'POST',
			url: ("select_vivienda_proyecto.php"),
			data:"proyecto="+proyecto,
			success: function(data) {
				 $('#valor').html(data);
			}
		})
		/*$.ajax({
			type: 'POST',
			url: ("select_porcentaje.php"),
			data:"porcentaje=90",
			dataType:'json',
			success: function(data) {
				//$('#valor_porcentaje').html(data.formato);
				$('#credito').val(data.valor);
				$('#directo').val(data.resta);
			}
		})*/
		$.ajax({
			type: 'POST',
			url: ("select_porcentaje_valor.php"),
			data:"nada=1",
			success: function(data) {
				 $('#porcentaje').html(data);
			}
		})
		$.ajax({
			type: 'POST',
			url: ("select_link_proyecto.php"),
			data:"proyecto="+proyecto,
			success: function(data) {
				 $('#link').html(data);
			}
		})
		//$('#valor_porcentaje').html('');
		$('#credito').val('');
		$('#directo').val('');
	});


</script>