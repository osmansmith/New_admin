<script>
  $("#formuser").submit( function(e){
      e.preventDefault();
      var nombre = $("#nombre").val();
      var usuario = $("#usuario").val();
      var mail = $("#mail").val();
      var perfil = $("#perfil").val();
      var password = $("#password").val();
      
                                
      $.ajax({
          type : 'POST',
          url  : $( this ).attr('action'),
          data : "nombre="+nombre+"&usuario="+usuario+"&mail="+mail+"&perfil="+perfil+"&password="+password,
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
      
      
  });
    $("#formuseredita").submit( function(e){
      e.preventDefault();
        
      var nombre = $("#nombre").val();
      var id_usu = $("#id_usu").val();
      var usuario = $("#usuario").val();
      var mail = $("#mail").val();
      var perfil = $("#perfil").val();
      var password = $("#password").val();
      
                                
      $.ajax({
          type : 'POST',
          url  : $( this ).attr('action'),
          data : "id_usu="+id_usu+"&nombre="+nombre+"&usuario="+usuario+"&mail="+mail+"&perfil="+perfil+"&password="+password,
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
      
      
  });
</script>