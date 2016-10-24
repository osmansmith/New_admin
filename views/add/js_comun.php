</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="<?php echo URL?>public/assets/js/jquery.js"></script>-->
    <script src="<?php echo URL?>public/assets/js/jquery-3.1.1.min.js"></script>
   <!-- <script src="<?php echo URL?>public/assets/js/jquery-1.8.3.min.js"></script>-->
    <script src="<?php echo URL?>public/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo URL?>public/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo URL?>public/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo URL?>public/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo URL?>public/assets/js/alert/sweet-alert.js"></script>
    <!--<script src="<?php echo URL?>public/assets/js/jquery.validate.js" type="text/javascript"></script>
    <script src="<?php echo URL?>public/assets/js/jquery.rut.js" type="text/javascript"></script>
    <script src="<?php echo URL?>public/assets/js/jquery.numeric.js" type="text/javascript"></script>-->


    <!--common script for all pages-->
    <script src="<?php echo URL?>public/assets/js/common-scripts.js"></script>
    
    <!-- Librerias para las notificaciones flotantes
    <script type="text/javascript" src="<?php //echo URL?>public/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php //echo URL?>public/assets/js/gritter-conf.js"></script> -->
  
  <script type="text/javascript">
      $(function () {
  $('[data-toggle="tooltip"]').tooltip({
  container: 'body'
  })
});
 var url = "<?php echo URL?>";
 var url_web=window.location.href;
 var arr=url_web.split('.')[0];     	
        
	   if(arr == url+"vende/index")
		{
			$('.sidebar-menu li a').removeClass('active');
			$('#escritorio').addClass('active');		
		}else if(arr == url+"vende/ingreso")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_ingresar').addClass('active');
			$('#cot').addClass('active');
		}else if(arr == url+"vende/listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_listar').addClass('active');
			$('#cot').addClass('active');
		}else if(arr == url+"admin/index")
		{
			$('.sidebar-menu li a').removeClass('active');
			$('#escritorio').addClass('active');		
		}else if(arr == url+"admin/user_ingreso")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#user_ingreso').addClass('active');
			$('#user').addClass('active');
		}else if(arr == url+"admin/user_listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#user_listado').addClass('active');
			$('#user').addClass('active');
		}else if(arr == url+"admin/cot_listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_listado').addClass('active');
			$('#cot').addClass('active');
		}
  </script>

<script type="text/javascript">
	function resultado(data) {
        if(data.envio == 1){
            swal({
              title: "Gracias!",
              text: "Cotización Enviada!",
              type: "success",
              showCancelButton: false,
              confirmButtonColor: "#9bde94",
              confirmButtonText: "Aceptar",
              closeOnConfirm: false
            },
            function(){
                // window.location='index.php';
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
</script>