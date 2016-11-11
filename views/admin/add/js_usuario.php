<script>
    function resultado(data) {
        if(data.envio == 1){
            swal({
              title: "Gracias!",
              text: "Registro completado!",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#9bde94",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false
            },
            function(){
                     window.location='<?php echo URL?>admin/user_listado';
            });
            //swal("Excelente!", "Registro eliminado con exito!", "success",location.reload());
        }
        if(data.envio == 2){
            swal("Error!", "No ingrese urls por favor","error");
        }
        if(data.envio == 3){
            swal("Error!", "Favor intentar de nuevo","error");
        }
        // if(data.envio != ""){
        //     alert(data.envio);
        // }
    }
   
  $("#formuseringreso").submit( function(){
    
      var nombre = $("#nombre").val();
      var usuario = $("#usuario").val();
      var mail = $("#mail").val();
      var perfil = $("#perfil").val();
      var password = $("#password").val();
                 
      $.ajax({
          type : 'POST',
          url  : '<?php echo URL?>admin/insert_user',
          data : "nombre="+nombre+"&usuario="+usuario+"&mail="+mail+"&perfil="+perfil+"&password="+password,
          dataType : 'json',
          success : function(data)
          {
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
    $("#formuseredita").submit( function(){
              
      var nombre = $("#nombre").val();
      var id_usu = $("#id_usu").val();
      var usuario = $("#usuario").val();
      var mail = $("#mail").val();
      var perfil = $("#perfil").val();
      var password = $("#password").val();
                                      
      $.ajax({
          type : 'POST',
          url  : '<?php echo URL?>admin/update_user',
          data : "id_usu="+id_usu+"&nombre="+nombre+"&usuario="+usuario+"&mail="+mail+"&perfil="+perfil+"&password="+password,
          dataType : 'json',
          success : function(data)
          {
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
</script>