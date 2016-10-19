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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo URL?>user/ingreso" method="post">
		        <h2 class="form-login-heading">Iniciar Sesión</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="nombre"  placeholder="Usuario" autofocus required>
		            <br>
		            <input type="password" class="form-control" name="pass" maxlength="5" placeholder="Contraseña" required>
		            <label class="checkbox">
		               <!-- <span class="pull-right">
		                    <a data-toggle="modal" href="index/login#myModal"> Forgot Password?</a>
		
		                </span>-->
		            </label>
		            <button class="btn btn-theme03 btn-block" type="submit"><i class="fa fa-lock"></i> Acceder</button>
		           <!-- <hr>-->
		            
		      
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
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

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo URL?>public/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo URL?>public/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
