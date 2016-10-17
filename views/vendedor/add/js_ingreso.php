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
    // validate signup form on keyup and submit
    $("#commentForm").validate({
        rules: {
            nombres: {
                required: true,
                minlength: 5
            },
            paterno: {
                required: true,
                minlength: 5
            },
            materno: {
                required: true,
                minlength: 5
            },
            fono_trabajo: {
                required: true,
                minlength: 8
            },
            fono_celular: {
                required: true,
                minlength: 8
            },
            mail: {
                required: true,
                email: true
            },
            direccion: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            nombre: {
                required: "Por favor ingresa Nombre",
                minlength: "Al menos 3 caracteres"
            },
            mail: "Ingresa un email válido",
            comentarios: {
                required: "Por favor ingresa Solicitud",
                minlength: "Al menos 6 caracteres"
            }
        }
    });
    function resultado(data) {
        if(data.envio == 1){
            swal({
              title: "Gracias!",
              text: "Contacto registrado con éxito!",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#9bde94",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false
            },
            function(){
                window.location='index.php';
            });
            //swal("Excelente!", "Registro eliminado con exito!", "success",location.reload());
        }
        if(data.envio == 2){
            swal("Error!", "No ingreses urls por favor","error");
        }
        if(data.envio == 3){
            swal("Error!", "Favor intenta de nuevo","error");
        }
        /*if(data.envio != ""){
            alert(data.envio);
        }*/
    }
    $('#commentForm').submit(function() {
        if ($("#commentForm").validate().form() == true){
            var_nombre = $('#nombre').val();
            var_nombre = var_nombre.replace(/\&/g,'{#@}');
            var_nombre = var_nombre.replace(/\+/g,'{#@@}');
            var_mail = $('#mail').val();
            var_mail = var_mail.replace(/\&/g,'{#@}');
            var_mail = var_mail.replace(/\+/g,'{#@@}');
            var_fono = $('#fono').val();
            var_fono = var_fono.replace(/\&/g,'{#@}');
            var_fono = var_fono.replace(/\+/g,'{#@@}');
            var_comentarios = $('#comentarios').val();
            var_comentarios = var_comentarios.replace(/\&/g,'{#@}');
            var_comentarios = var_comentarios.replace(/\+/g,'{#@@}');
            $('#contenedor_boton').html('<img src="img/load1.gif">');
            $.ajax({
                data:"nombre="+var_nombre+"&mail="+var_mail+"&fono="+var_fono+"&comentarios="+var_comentarios,
                type: 'POST',
                url: $(this).attr('action'),
                dataType:'json',
                success: function(data) {
                    //$('#informacion').html(data);
                    resultado(data);
                }           
            })
        }
        return false;
    });
});
</script>