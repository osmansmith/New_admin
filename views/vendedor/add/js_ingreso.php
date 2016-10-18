<script type="text/javascript">
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
        
		var_porcentaje =  $('#porcentaje').val();
		var_valor_vivienda = $('#valor_vivienda').val();
        var token = "btn_credito";
        var datos = {
            porcentaje : var_porcentaje,
            valor_vivienda : var_valor_vivienda,
            token : token
        }; 
        //alert(var_valor_vivienda);
       
		$.ajax({
			type: 'POST',
			url: ("<?php echo URL?>vende/procesa_ingreso"),
			data: datos,
			dataType:'json',
			success: function(data){  
               /*console.log(data.valor);
               console.log(data.resta);*/
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
    $.validator.setDefaults({
	//submitHandler: function() { alert("Enviado!"); }
});

$().ready(function() {
	// validate the comment form when it is submitted
	//$("#commentForm").validate();
$('.numero').numeric();
		$.validator.addMethod("rut", function(value, element) {
  			return this.optional(element) || $.Rut.validar(value);
			}, "<br>Rut inválido.");
	// validate signup form on keyup and submit
	$("#commentForm").validate({
		rules: {
			rut: "required",
			rut: { 
					required: true
				},
			nombres: {
				required: true,
				minlength: 3
			},
			paterno: {
				required: true,
				minlength: 3
			},
            materno: {
				required: true,
				minlength: 3
			},
			ciudad: {
				required: true
			},
			fono_contacto: {
				required: true,
				minlength: 6
			},
			credito: {
				required: true
			},
			mail: {
				required: true
			}
		},
		messages: {
			rut: {
				required: "<br>Ingrese un Rut"
				},
			nombres: {
				required: "<br>Por favor ingrese Nombres",
				minlength: "<br>Al menos 3 caracteres"
			},
			paterno: {
				required: "<br>Por favor ingrese Apellido Paterno",
				minlength: "<br>Al menos 3 caracteres"
			},
			ciudad: {
				required: "<br>Por favor seleccione Ciudad"
			},
			credito: {
				required: "<br>Por favor ingrese crédito"
			},
			fono_contacto: {
				required: "<br>Por favor ingrese Fono",
				minlength: "<br>Al menos 6 caracteres"
			},
			mail: {
				required: "<br>Por favor ingrese mail"
			}
		}
	});
$('#rut').Rut({
  			
		});

});

</script>