<script>
    $("#btn_enviar").click(function(){
        var rut = $("#rut").val();
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
        
        $.ajax({
            type : 'POST',
            url  : '<?php echo URL?>vende/editar',
            data : edita,
            success : function(response){
                alert('datos editados correctamente');
            },
            error : function(){
                
            } 
        });
        
        
        
        
    });

</script>