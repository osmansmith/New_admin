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
    

function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
    
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        
        // Sumar al Contador General
        suma = suma + index;
        
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
  
    }
    
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}


</script>

<script>
$().ready(function() {

    function resultado(data) {
        if(data.envio == 1){
            swal({
              title: "Gracias!",
              text: "Contacto registrado con éxito!",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#9bde94",
              confirmButtonText: "Aceptar",
              closeOnConfirm: true
            },
            function(){
                window.location='<?php echo URL;?>vende/listado';
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
        var rut = $("#rut").val();
        var id_cli = $("#id_cli").val();
        var nombres = $("#nombres").val();
        var paterno = $("#paterno").val();
        var materno = $("#materno").val();
        var fono_trabajo = $("#fono_trabajo").val();
        var fono_celular = $("#fono_celular").val();
        var mail = $("#mail").val();
        var direccion = $("#direccion").val();
        var ciudad = $("#ciudad").val();
        var fono_casa = $("#fono_casa").val();
        var fono_contacto = $("#fono_contacto").val();
        var comentario = $("#comentario").val();
        var proyecto = $("#proyecto").val();
        var modelo = $("#modelo").val();
        var valor_vivienda = $("#valor_vivienda").val();
        var porcentaje = $("#porcentaje").val();
        var contrato = $("#contrato").val();
        var credito = $("#credito").val();
        var directo = $("#directo").val();
        var subsidio = $("#subsidio").val();
        var contado = $("#contado").val();
        
        var inserta = {
        'rut' : rut,
        'id_cli' : id_cli,
        'nombres' : nombres,
        'paterno': paterno,
        'materno': materno,
        'fono_trabajo' : fono_trabajo,
        'fono_celular' : fono_celular,
        'mail' : mail,
        'direccion' : direccion,
        'ciudad' : ciudad,
        'fono_casa' : fono_casa,
        'fono_contacto' : fono_contacto,
        'comentario' : comentario,
        'proyecto' : proyecto,
        'modelo' : modelo,
        'valor_vivienda' : valor_vivienda,
        'porcentaje' : porcentaje,
        'contrato' : contrato,
        'credito' : credito,
        'directo' : directo,
        'subsidio' : subsidio,
        'contado' : contado        
        };
        // alert(inserta['valor_vivienda']);
        $.ajax({
            data : inserta,
            type : 'POST',
            url  : '<?php echo URL?>vende/insert_vende',
            dataType:'json',
            success : function(data){
                resultado(data);  
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
        });
    return false;
    });
});
</script>