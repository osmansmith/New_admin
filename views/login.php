<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Inmobiliaria NOVA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL?>public/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo URL?>public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo URL?>public/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo URL?>public/assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL?>public/assets/alert/sweet-alert.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" id="loginform">
		        <h2 class="form-login-heading">Iniciar Sesión</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Usuario" autofocus required>
		            <br>
		            <input type="password" class="form-control" name="pass" id="pass" maxlength="5" placeholder="Contraseña" required>
		            <label class="checkbox">
		              
		            </label>
		            <button class="btn btn-theme03 btn-block" type="submit"><i class="fa fa-lock"></i> Acceder</button>
		           <!-- <hr>-->
		        </div>				          		
		      </form>	
		        <div class="row">  	
		        <div class="col-sm-4 col-md-4  col-sm-offset-4" style="margin-top:10px;">
	  	     <?php
                if($_GET['error']==1)
                {
                   ?>
                   
                   <div class="alert alert-danger"><b>Oh!</b> ha ocurrido un error, vuelva a intentarlo.</div>
                   
                   
                   <?php 
                    
                }
             ?>
             </div>
            </div>
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL?>public/assets/js/jquery.js"></script>
    <script src="<?php echo URL?>public/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo URL?>public/assets/js/alert/sweet-alert.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo URL?>public/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo URL?>public/assets/img/login-bg.jpg", {speed: 500});
    </script>

    <script>
$().ready(function() {
    function resultado(data) {
        if(data.envio == 1 ){
            swal({
              title: "Gracias!",
              text: "Ingresó con éxito!",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#9bde94",
              confirmButtonText: "Aceptar",
              closeOnConfirm: true
            },
            function(){
            	if (data.perfil == 0) 
            	{
            		window.location='<?php echo URL;?>vende/index';
            	}
            	if(data.perfil == 1)
            	{
            	    window.location='<?php echo URL;?>admin/index';
            	}
                
            });
            //swal("Excelente!", "Registro eliminado con exito!", "success",location.reload());
        }
        if(data.envio == 2){
            swal("Error!", "Datos Incorrectos","error");
        }
        if(data.envio == 3){
            swal("Error!", "Favor intenta de nuevo","error");
        }
        /*if(data.envio != ""){
            alert(data.envio);
        }*/
    }

    $('#loginform').submit(function() {
        var nombre = $("#nombre").val();
        var pass = $("#pass").val();

        // alert(nombre);
        $.ajax({
            data : "nombre="+nombre+"&pass="+pass,
            type : 'POST',
            url  : '<?php echo URL?>user/ingreso',
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
  </body>
</html>
