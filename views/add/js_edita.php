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

    $('#editaform').submit(function() {
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
        
        var edita = {
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
        // alert(edita['valor_vivienda']);
        $.ajax({
            data : edita,
            type : 'POST',
            url  : '<?php echo URL?>vende/update_vende',
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