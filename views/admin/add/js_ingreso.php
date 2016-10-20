<script type="text/javascript">
    /*var password, password2;

password = document.getElementById('password');
password2 = document.getElementById('password2');

password.onchange = password2.onkeyup = passwordMatch;

function passwordMatch() {
    if(password.value !== password2.value)
        password2.setCustomValidity('Las contraseñas no coinciden.');
    else
        password2.setCustomValidity('');
}*/
    
$("#btn_enviar_usuario").click(function(e){
    e.preventDefault();
      
        var nombre = $("#nombre").val();
        var perfil = $("#perfil").val();
        var usuario = $("#usuario").val();
        var mail = $("#mail").val();
        var password2 = $("#password").val();
        
      
        var usuario = {
        'perfil' : perfil,
        'nombre' : nombre,
        'usuario' : usuario,
        'mail' : mail,
        'password': password              
        };
        
        $.ajax({
            type : 'POST',
            url  : '<?php echo URL?>admin/insert_user',
            data : usuario,
            success : function(dat){
                alert(dat);               
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