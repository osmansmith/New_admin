<script>
  $("#btn_usuario").click( function(){
      var nombre = $("#nombre").val();
      var usuario = $("#usuario").val();
      var mail = $("#mail").val();
      var perfil = $("#perfil").val();
      var password = $("#password").val();
      
      
      
      if(nombre !== "" && usuario !== "" && mail !== "" && perfil !== "" && password !== "" )
      {                
      $.ajax({
          type : 'POST',
          url  : '<?php echo URL?>admin/insert_user',
          data : "nombre="+nombre+"&usuario="+usuario+"&mail="+mail+"&perfil="+perfil+"&password="+password,
          success : function(data)
          {
              alert(data);
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
      }else{
          alert('complete todos los campos');
      }
      
  });
</script>