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
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    
    <!-- Librerias para las notificaciones flotantes
    <script type="text/javascript" src="<?php //echo URL?>public/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php //echo URL?>public/assets/js/gritter-conf.js"></script> -->
  
  <script type="text/javascript">
      

$(function () {
  $('[data-toggle="tooltip"]').tooltip({
  container: 'body'
  })
});
 // var url = "<?php echo URL?>";
 // var url_web=window.location.href;
 // var arr=url_web.split('/')[2];    
 var url = "http://inmobiliarianova.cl/cotizador/";
 var url_web=window.location.href;
 // var arr=url_web.split('/')[4];
 // var arr2 = url_web.split('/')[0]+'/'+url_web.split('/')[1]+'/'+url_web.split('/')[2]+'/'+url_web.split('/')[3];
 var arr2 = url_web;
// alert(arr2);
// alert(url+"admin/user_ingreso"); 
	   if(arr2 == url+"vende/index")
		{
			$('.sidebar-menu li a').removeClass('active');
			$('#escritorio').addClass('active');		
		}else if(arr2 == url+"vende/ingreso")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_ingresar').addClass('active');
			$('#cot').addClass('active');
		}else if(arr2 == url+"vende/listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_listar').addClass('active');
			$('#cot').addClass('active');
		}else if(arr2 == url+"admin/index")
		{
			$('.sidebar-menu li a').removeClass('active');
			$('#escritorio').addClass('active');		
		}else if(arr2 == url+"admin/user_ingreso")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#user_ingreso').addClass('active');
			$('#user').addClass('active');
		}else if(arr2 == url+"admin/user_listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#user_listado').addClass('active');
			$('#user').addClass('active');
		}else if(arr2 == url+"admin/cot_listado")
		{
			$('.sidebar-menu li').removeClass('active');
			$('.sidebar-menu li a').removeClass('active');
			$('#cot_listado').addClass('active');
			$('#cot').addClass('active');
		}

		// Graficos

		
                       
                  
                            $(function () {
                                Highcharts.setOptions({
                                    lang: {
                                        decimalPoint: ',',
                                        thousandsSep: '.'
                                    },
                                    credits: {
                                        enabled: false
                                    }
                                });
                                $('#grafico_venta').highcharts({
                                    // chart: {
                                    //     type: 'column'
                                    // },
                                    title: {
                                        text: 'Cotizaciones Mensuales'
                                    },
                                    // subtitle: {
                                    //     text: 'Source: WorldClimate.com'
                                    // },
                                    xAxis: {
                                        categories: [
                                            'Ene',
                                            'Feb',
                                            'Mar',
                                            'Abr',
                                            'May',
                                            'Jun',
                                            'Jul',
                                            'Ago',
                                            'Sep',
                                            'Oct',
                                            'Nov',
                                            'Dic'
                                        ],
                                        crosshair: true
                                    },
                                    yAxis: {
                                        min: 0,
                                        tickPixelInterval: 50,
                                        title: {
                                            text: 'Cotizaciones'
                                        },
                                        labels: {
                                                format: '{value:.,0f}'
                                            }
                                    },
                                    tooltip: {
                                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                                            '<td style="padding:0"><b>$ {point.y:,.0f}</b></td></tr>',
                                        footerFormat: '</table>',
                                        shared: true,
                                        useHTML: true
                                    },
                                    series: [{
                                        name: 'Cotizaciones',
                                        data: [
                                            <?php
                                            $conexion = new Conexion;
                                            $fecha_venta = "01-01-".date("Y");
                                            for($i=1;$i<=12;$i++){
                                                $fecha_mes = date("m",strtotime($fecha_venta));
                                               
                                                //-------   SALDO
                                                $consulta = 
                                                    "
                                                    SELECT
                                                        id_cot
                                                    FROM
                                                        cotizador_cotizacion
                                                    WHERE
                                                        MONTH(fecha_cot) = '".$fecha_mes."' AND
                                                        YEAR(fecha_cot) = '".date("Y")."'
                                                    ";

                                                $conexion->consulta($consulta);
                                                $nquery = $conexion->total();
                                                // $fila = $conexion->extraer_registro();
                                                // $total_mes_grafico = utf8_encode($fila["fecha_cot"]);
                                                
                                                if($i < 12){
                                                    echo $nquery.","; 
                                                }
                                                else{
                                                    echo $nquery;
                                                }
                                                $fecha_venta = date('Y-m-d',strtotime ('+1 month' , strtotime ( $fecha_venta)));    
                                            }
                                           
                                            ?>
                                        
                                        ]
                                    }]
                                });
                            });

	
</script>